<?php
    RoleController::adminAccessGrantedWithRedirection();
    
    include_once CONTROLLERS . "/ForumManagement/ForumController.php" ; 

    if(isset($_POST) && isset($_POST['ids'])) {
        ForumController::ban($_POST);
    } else {
        echo "could not find data";
    } 
?>