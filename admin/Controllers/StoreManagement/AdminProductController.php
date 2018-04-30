<?php
include_once CONTROLLERS . "/StoreManagement/ProductController.php";
include_once MODELS  . "/Store/Product.php";
include_once MODELS  . "/Store/Category.php";
use Handlers\FileUploadHandler;
use Handlers\FieldType;


class AdminProductController
{
    public static function handlePostRequest(&$submitted_form, $action)
    {   
        // check that every required field is submitted.
        foreach ($submitted_form->fields as $field) {
            if ($field->required && !isset($_POST[$field->Name])) {
                $alert =  AdminAlertHandler::show( "The Field " . $field->DisplayName . "is required",AlertType::Error);
                return  ;
          
            }
        }
        if ($action == "create") {

            $category = new Category();
            foreach ($submitted_form->fields as $field) { 
                    $category->{$field->Name} = $_POST[$field->Name];
                    $field->default_value = $_POST[$field->Name];
                
            }
            $category->save();
            $alert =  AdminAlertHandler::show("Category created successfully",AlertType::Success);
            return  ;
        } elseif ($action == "edit") {
            try {
                $category = Category::retrieveByPK($_GET["id"]);
                if ($category) {
                    foreach ($submitted_form->fields as $field) {
                            $category->{$field->Name} = $_POST[$field->Name];
                            $field->default_value = $_POST[$field->Name];
                    }
                    $category->save();
          
                } else {
                    $alert =  AdminAlertHandler::show("Couldn't find category",AlertType::Error);
                    return  ;
                }
            } catch (Exception $e) {
                $alert =  AdminAlertHandler::show("Couldn't update category",AlertType::Error);
                return  ;
            }
        }
        $alert =  AdminAlertHandler::show("Category Info Updated Successfully",AlertType::Success);
        return ;
    }

    public static function handleProductPostRequest(&$submitted_form, $action)
    {   
        // check that every required field is submitted.
        foreach ($submitted_form->fields as $field) {
            if ($field->required && !isset($_POST[$field->Name])) {
                $alert =  AdminAlertHandler::show( "The Field " . $field->DisplayName . "is required",AlertType::Error);
                return  ;
          
            }
        }
        if ($action == "create") {
            
            $product = new Product();
            foreach ($submitted_form->fields as $field) {
                if($field->FieldType == FieldType::Image) {
                    $uploaded = FileUploadHandler::saveFile($field->Name,"uploads/products/") ;
                    if ($uploaded != False) {
                        $product->{$field->Name} = $uploaded;
                        $field->default_value = $uploaded;
                    }else {
                        $alert =  AdminAlertHandler::show("File couldn't be uploaded",AlertType::Error);
                        return  ;
                    }
                } else {
                    $product->{$field->Name} = $_POST[$field->Name];
                    $field->default_value = $_POST[$field->Name];
                }
            }
            $product->save();
            $alert =  AdminAlertHandler::show("Product created successfully",AlertType::Success);
            return  ;
        } elseif ($action == "edit") {
            try {
                $product = Product::retrieveByPK($_GET["id"]);
                if ($product) {
                    foreach ($submitted_form->fields as $field) {
                        if($field->FieldType == FieldType::Image && !empty($_FILES[$field->Name]["name"])) {
                            $uploaded = FileUploadHandler::saveFile($field->Name,"uploads/products/") ;
                            if ($uploaded != False) {
                                $product->{$field->Name} = $uploaded;
                                $field->default_value = $uploaded;
                            }else if (!empty($_FILES[$field->Name]["name"])){
                                return "File not uploaded";
                            }
                        } else if ($field->FieldType != FieldType::Image ) {
                            $product->{$field->Name} = $_POST[$field->Name];
                            $field->default_value = $_POST[$field->Name];
                        }
                    }
                    $product->password =  AuthenticationController::hash_password($product->password);
                    $product->save();
          
                } else {
                    $alert =  AdminAlertHandler::show("Couldn't find Product",AlertType::Error);
                    return  ;
                }
            } catch (Exception $e) {
                $alert =  AdminAlertHandler::show("Couldn't update Product",AlertType::Error);
                return  ;
            }
        }
        $alert =  AdminAlertHandler::show("Product Info Updated Successfully",AlertType::Success);
        return ;
    }
}


?>