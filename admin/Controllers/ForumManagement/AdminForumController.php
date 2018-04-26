<?php
include_once CONTROLLERS . "/ForumManagement/ForumController.php";
include_once MODELS  . "/Forum/Topic.php";
use Handlers\FileUploadHandler;
use Handlers\FieldType;


class AdminForumController
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

            $topic = new Topic();
            foreach ($submitted_form->fields as $field) { 
                    $topic->{$field->Name} = $_POST[$field->Name];
                    $field->default_value = $_POST[$field->Name];
                
            }
            $topic->save();
            $alert =  AdminAlertHandler::show("Topic created successfully",AlertType::Success);
            return  ;
        } elseif ($action == "edit") {
            try {
                $topic = Topic::retrieveByPK($_GET["id"]);
                if ($topic) {
                    foreach ($submitted_form->fields as $field) {
                            $topic->{$field->Name} = $_POST[$field->Name];
                            $field->default_value = $_POST[$field->Name];
                    }
                    $topic->save();
          
                } else {
                    $alert =  AdminAlertHandler::show("Couldn't find Topic",AlertType::Error);
                    return  ;
                }
            } catch (Exception $e) {
                $alert =  AdminAlertHandler::show("Couldn't update Topic",AlertType::Error);
                return  ;
            }
        }
        $alert =  AdminAlertHandler::show("Topic Info Updated Successfully",AlertType::Success);
        return ;
    }
}
?>