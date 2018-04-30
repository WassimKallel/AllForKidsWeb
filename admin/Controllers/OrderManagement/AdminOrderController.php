<?php
include_once CONTROLLERS . "/StoreManagement/ProductController.php";
include_once MODELS  . "/Order/ShippingMethod.php";

use Handlers\FileUploadHandler;
use Handlers\FieldType;


class AdminOrderController
{
    public static function handleShippingMethodPostRequest(&$submitted_form, $action)
    {   
        // check that every required field is submitted.
        foreach ($submitted_form->fields as $field) {
            if ($field->required && !isset($_POST[$field->Name])) {
                $alert =  AdminAlertHandler::show( "The Field " . $field->DisplayName . "is required",AlertType::Error);
                return  ;
            }
        }
        if ($action == "create") {

            $shipping_method = new shippingMethod();
            foreach ($submitted_form->fields as $field) { 
                    $shipping_method->{$field->Name} = $_POST[$field->Name];
                    $field->default_value = $_POST[$field->Name];   
            }
            $shipping_method->save();
            $alert =  AdminAlertHandler::show("Shipping method created successfully",AlertType::Success);
            return  ;
        } elseif ($action == "edit") {
            try {
                $shipping_method = shippingMethod::retrieveByPK($_GET["id"]);
                if ($shipping_method) {
                    foreach ($submitted_form->fields as $field) {
                            $shipping_method->{$field->Name} = $_POST[$field->Name];
                            $field->default_value = $_POST[$field->Name];
                    }
                    $shipping_method->save();
          
                } else {
                    $alert =  AdminAlertHandler::show("Couldn't find Shipping method",AlertType::Error);
                    return  ;
                }
            } catch (Exception $e) {
                $alert =  AdminAlertHandler::show("Couldn't update Shipping method",AlertType::Error);
                return  ;
            }
        }
        $alert =  AdminAlertHandler::show("Shipping method Info Updated Successfully",AlertType::Success);
        return ;
    }


}


?>