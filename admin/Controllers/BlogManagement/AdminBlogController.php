<?php

include_once MODELS  . "/Blog/Post.php";

use Handlers\FileUploadHandler;
use Handlers\FieldType;


class AdminBlogController
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
            
            $post = new Post();
            foreach ($submitted_form->fields as $field) {
                if($field->FieldType == FieldType::Image) {
                    $uploaded = FileUploadHandler::saveFile($field->Name,"uploads/blog/") ;
                    if ($uploaded != False) {
                        $post->{$field->Name} = $uploaded;
                        $field->default_value = $uploaded;
                    }else {
                        $alert =  AdminAlertHandler::show("File couldn't be uploaded",AlertType::Error);
                        return  ;
                    }
                } else if ($field->FieldType == FieldType::Date ) {
                    $d = new DateTime( $_POST[$field->Name]);
                    $post->{$field->Name} =  $d->format("Y-m-d H:i:s");
                    
                }else {
                    $post->{$field->Name} = $_POST[$field->Name];
                
                }
            }
            $post->save();
            $alert =  AdminAlertHandler::show("Post created successfully",AlertType::Success);
            return  ;
        } elseif ($action == "edit") {
            try {
                $post = Post::retrieveByPK($_GET["id"]);
                if ($post) {
                    foreach ($submitted_form->fields as $field) {
                        if($field->FieldType == FieldType::Image && !empty($_FILES[$field->Name]["name"])) {
                            $uploaded = FileUploadHandler::saveFile($field->Name,"uploads/blog/") ;
                            if ($uploaded != False) {
                                $post->{$field->Name} = $uploaded;
                                $field->default_value = $uploaded;
                            }else if (!empty($_FILES[$field->Name]["name"])){
                                return "File not uploaded";
                            }
                        } else if ($field->FieldType != FieldType::Image ) {
                            $post->{$field->Name} = $_POST[$field->Name];
                            $field->default_value = $_POST[$field->Name];
                        }
                        else if ($field->FieldType == FieldType::Date ) {
                            $d = new DateTime( $_POST[$field->Name]);
                            $post->{$field->Name} =  $d->format("Y-m-d H:i:s");
                        }
                    }
                    
                    $post->save();
          
                } else {
                    $alert =  AdminAlertHandler::show("Couldn't find Post",AlertType::Error);
                    return  ;
                }
            } catch (Exception $e) {
                $alert =  AdminAlertHandler::show("Couldn't update Post",AlertType::Error);
                return  ;
            }
        }
        $alert =  AdminAlertHandler::show("Product Info Updated Post",AlertType::Success);
        return ;
    }
    public static function getBlogPostsCount()
    {
        return count(Post::countAllPosts());
    }
}


?>