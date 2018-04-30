<?php
include_once CONTROLLERS . "/StoreManagement/ProductController.php";
include_once MODELS  . "/Store/Store.php";

use Handlers\FileUploadHandler;
use Handlers\FieldType;


class AdminStoreController
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

            $store = new Store();
            foreach ($submitted_form->fields as $field) { 
                    $store->{$field->Name} = $_POST[$field->Name];
                    $field->default_value = $_POST[$field->Name];   
            }
            $store->save();
            $alert =  AdminAlertHandler::show("Store created successfully",AlertType::Success);
            return  ;
        } elseif ($action == "edit") {
            try {
                $store = Store::retrieveByPK($_GET["id"]);
                if ($store) {
                    foreach ($submitted_form->fields as $field) {
                            $store->{$field->Name} = $_POST[$field->Name];
                            $field->default_value = $_POST[$field->Name];
                    }
                    $store->save();
          
                } else {
                    $alert =  AdminAlertHandler::show("Couldn't find store",AlertType::Error);
                    return  ;
                }
            } catch (Exception $e) {
                $alert =  AdminAlertHandler::show("Couldn't update store",AlertType::Error);
                return  ;
            }
        }
        $alert =  AdminAlertHandler::show("Category Info Updated Successfully",AlertType::Success);
        return ;
    }


}


?>