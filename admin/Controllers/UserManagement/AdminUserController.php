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
                return "The Field " . $field->DisplayName . "is required";
            }
        }
        if ($action == "create") {
            // check unique username.
            if (UserController::usernameExist($_POST["username"])) {
                return "Username must be unique";
            }
            $user = new User();
            foreach ($submitted_form->fields as $field) {
                if($field->FieldType == FieldType::Image) {
                    $uploaded = FileUploadHandler::saveFile($field->Name,"uploads/avatars/") ;
                    if ($uploaded != False) {
                        $user->{$field->Name} = $uploaded;
                        $field->default_value = $uploaded;
                    }else {
                        return "File not uploaded";
                    }
                } else {
                    $user->{$field->Name} = $_POST[$field->Name];
                    $field->default_value = $_POST[$field->Name];
                }
            }
            $user->password = AuthenticationController::hash_password($user->password);
            $user->save();
        } elseif ($action == "edit") {
            try {
                $user = User::retrieveByPK($_GET["id"]);
                if ($user) {
                    if ($user->username != $_POST["username"] && UserController::usernameExist($_POST["username"])) {
                        return "Username must be unique";
                    }
                    var_dump($_FILES);
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
                    $user->password =  AuthenticationController::hash_password($user->password);
                    $user->save();
          
                } else {
                    return "cannot find User";
                }
            } catch (Exception $e) {
                return "Cannot Update User";
            }
        }
        return false ;
    }
}
