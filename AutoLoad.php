<?php
use \Core\ORM\DataBaseManager;
use \Core\ORM\Model;

define("ROOT_DIR", dirname(__FILE__));
define("VIEWS", dirname(__FILE__). "/Views");
define("CONTROLLERS", dirname(__FILE__). "/Controllers");
define("MODELS", dirname(__FILE__). "/Models");
define("HOME_DIR", "/AllForKidsWeb");
include "Config/Init.inc.php";
// initialize 
DataBaseManager::initializeMapper();
// User Management Initialization 
include_once CONTROLLERS . "/UserManagement/AuthenticationController.php" ;
$AuthController = new AuthenticationController();
include_once MODELS . "/UserManagement/User.php";
$GLOBALS["AuthController"] = $AuthController;

if (isset($_SESSION["uid"])  && isset($_SESSION["token"])) {
    $is_valid_session = $AuthController->checkSession($_SESSION["uid"],$_SESSION["token"]) ;
    if($is_valid_session) {
        setcookie("uid",base64_encode($_SESSION["uid"]),strtotime('+30 days'));
        setcookie("uidt",base64_encode($_SESSION["token"]),strtotime('+30 days'));
        AuthenticationController::$current_user = User::retrieveByPK($_SESSION["uid"]);
        AuthenticationController::$is_logged_in = True;
    }
} else if (isset($_COOKIE["uid"]) && isset($_COOKIE["uidt"])) {
    $is_valid_cookie = $AuthController->checkCookies($_COOKIE["uid"],$_COOKIE["uidt"]) ;   
    if ($is_valid_cookie){
        $AuthController->updateSession($_COOKIE["uid"],$_COOKIE["uidt"]);
        AuthenticationController::$current_user = User::retrieveByPK(base64_decode($_COOKIE["uid"]));
        AuthenticationController::$is_logged_in = True;
    }
}




