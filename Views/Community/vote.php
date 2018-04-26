<?php 
include_once CONTROLLERS . "/ForumManagement/ForumController.php" ; 
    if(isset($_POST) && !empty($_POST['post_id']) && !empty($_POST['vote'])) {
        ForumController::vote($_POST);
    }
?>