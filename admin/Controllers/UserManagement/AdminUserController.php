<?php
include_once CONTROLLERS . "/UserManagement/UserController.php";
include_once MODELS  . "/UserManagement/User.php";
include_once CONTROLLERS  . "/UserManagement/AuthenticationController.php" ;
use Handlers\FileUploadHandler;
use Handlers\FieldType;


class AdminUserController
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
            // check unique username.
            if (UserController::usernameExist($_POST["username"])) {
                $alert =  AdminAlertHandler::show("Username must be Unique",AlertType::Error);
                return  ;
            }
            $user = new User();
            foreach ($submitted_form->fields as $field) {
                if($field->FieldType == FieldType::Image) {
                    $uploaded = FileUploadHandler::saveFile($field->Name,"uploads/avatars/") ;
                    if ($uploaded != False) {
                        $user->{$field->Name} = $uploaded;
                        $field->default_value = $uploaded;
                    }else {
                        $alert =  AdminAlertHandler::show("File couldn't be uploaded",AlertType::Error);
                        return  ;
                    }
                } else {
                    $user->{$field->Name} = $_POST[$field->Name];
                    $field->default_value = $_POST[$field->Name];
                }
            }
            $user->password = AuthenticationController::hash_password($user->password);
            $user->save();
            $alert =  AdminAlertHandler::show("User created successfully",AlertType::Success);
            return  ;
        } elseif ($action == "edit") {
            try {
                $user = User::retrieveByPK($_GET["id"]);
                if ($user) {
                    if ($user->username != $_POST["username"] && UserController::usernameExist($_POST["username"])) {
                        $alert =  AdminAlertHandler::show("Username must be unique",AlertType::Error);
                        return  ;
                    }

                    foreach ($submitted_form->fields as $field) {
                        if($field->FieldType == FieldType::Image && !empty($_FILES[$field->Name]["name"])) {
                            $uploaded = FileUploadHandler::saveFile($field->Name,"uploads/avatars/") ;
                            if ($uploaded != False) {
                                $user->{$field->Name} = $uploaded;
                                $field->default_value = $uploaded;
                            }else if (!empty($_FILES[$field->Name]["name"])){
                                return "File not uploaded";
                            }
                        } else if ($field->FieldType != FieldType::Image ) {
                            $user->{$field->Name} = $_POST[$field->Name];
                            $field->default_value = $_POST[$field->Name];
                        }
                    }
                    var_dump($_POST["password"]);
                    $user->password =  AuthenticationController::hash_password($user->password);
                    $user->save();
          
                } else {
                    $alert =  AdminAlertHandler::show("Couldn't find User",AlertType::Error);
                    return  ;
                }
            } catch (Exception $e) {
                $alert =  AdminAlertHandler::show("Couldn't update User",AlertType::Error);
                return  ;
            }
        }
        $alert =  AdminAlertHandler::show("User Info Updated Successfully",AlertType::Success);
        return ;
    }
}
?>