<?php 
include_once "Roles.php";

class RoleController {
    public static function checkRole($user_role) {
        if ( AuthenticationController::getCurrentUser()->user_role == $user_role)   {
            return true;
        }
        else {
            header("Location: /error?code=403");
        }
    }
}