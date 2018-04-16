<?php 
include_once "Roles.php";
class RoleController
{
    public static function checkRole($user_role)
    {
        if (AuthenticationController::getCurrentUser() && AuthenticationController::getCurrentUser()->user_role == $user_role) {
            return true;
        } else {
            header("Location: error.php?code=403");
        }
    }
    public static function adminAccessGrantedWithRedirection()
    {
        if (AuthenticationController::$is_logged_in &&
                AuthenticationController::getCurrentUser() &&
                AuthenticationController::getCurrentUser()->role > Roles::User) {
            return true;
        } else {
            header("Location: " . $GLOBALS["AllForKids"]["platform_directory"] . "error?error=403");
        }
    }
    public static function adminAccessGranted() {
        if (    AuthenticationController::$is_logged_in &&
                AuthenticationController::getCurrentUser() &&
                AuthenticationController::getCurrentUser()->role > Roles::User) {
            return true;
        } else {
            return false;
        }   
    }
}
