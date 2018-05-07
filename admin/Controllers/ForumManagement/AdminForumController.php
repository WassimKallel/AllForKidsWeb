<?php
include_once CONTROLLERS . "/ForumManagement/ForumController.php";

include_once MODELS . "/Forum/Post.php";
include_once MODELS . "/Forum/Topic.php";
include_once MODELS . "/Forum/Report.php";
include_once MODELS . "/UserManagement/User.php";

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

    public static function unreport($post_data) {
        $report_ids  = $post_data['ids'];
        foreach ($report_ids as $report_id) {
            $current_report = Report::retrieveByPK($report_id);
            $reports = Report::retrieveByField("post_id", $current_report->post_id);
            foreach ($reports as $report_to_treat) {
                $report_to_treat->treated = 1;
                $report_to_treat->save();
            }
        }
    }

    public static function ban($post_data) {
        $users_to_ban = [];
        $posts_to_report = [];
        $report_ids  = $post_data['ids'];

        foreach ($report_ids as $report_id) {
            $current_report = Report::retrieveByPK($report_id);
            array_push($posts_to_report, $current_report->post_id);
        }

        $posts_to_report = array_unique($posts_to_report);
        
        foreach ($posts_to_report as $post_id) {
            $post = Post::retrieveByPK($post_id);
            $treated_reports = Report::retrieveByField("post_id", $post_id);
            foreach ($treated_reports as $report_to_treat) {
                $report_to_treat->treated = 1;
                $report_to_treat->save();
            }
            array_push($users_to_ban, $post->user_id);
            $post->reported = 1;
            $post->save();
        }

        $users_to_ban = array_unique($users_to_ban);

        foreach ($users_to_ban as $user_id) {
            $user = User::retrieveByPK($user_id);
            $user->active = 0;
            $user->save();
            AdminForumController::notifyUserBan($user);
        }
    }

    public static function notifyUserBan($user) {
        $mail = $GLOBALS["Mail"];
        // $mail->addAddress($user->email, $user->getFullName());     
        $mail->addAddress('wassim.kallel@hotmail.com', 'Wassim Kallel');     
        $mail->isHTML(false);                               
        $mail->Subject = 'You\'ve been banned';
        $mail->Body    = 'You\'ve been banned due to posting inappropriate content on allForKids Forum';
        $mail->send();
    }
}
?>