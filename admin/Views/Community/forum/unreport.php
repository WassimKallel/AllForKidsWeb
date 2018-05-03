<?php
    RoleController::adminAccessGrantedWithRedirection();
    
    include_once ADMINCONTROLLERS . "/ForumManagement/AdminForumController.php" ;

    if(isset($_POST) && isset($_POST['ids'])) {
        AdminForumController::unreport($_POST);
    } else {
        echo "could not find data";
    } 
?>