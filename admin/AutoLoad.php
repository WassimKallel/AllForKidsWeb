<?php
use \Core\ORM\DataBaseManager;
use \Core\ORM\Model;

use \PHPMailer\PHPMailer\PHPMailer;
use \PHPMailer\PHPMailer\Exception;

define("ROOT_DIR", dirname(__FILE__)."/../");
define("VIEWS", dirname(__FILE__). "/Views");
define("ADMINCONTROLLERS", dirname(__FILE__). "/Controllers");
define("CONTROLLERS", dirname(__FILE__). "/../Controllers");
define("MODELS", dirname(__FILE__). "/../Models");
define("HOME_DIR", "/AllForKidsWeb/admin/");
include dirname(__FILE__)."/../Config/Init.inc.php";
include "../Core/PrettyDateTime.php";
// initialize 
DataBaseManager::initializeMapper();
// User Management Initialization 
include_once CONTROLLERS . "/UserManagement/AuthenticationController.php" ;
include_once CONTROLLERS . "/UserManagement/RoleController.php" ;
include_once CONTROLLERS . "/UserManagement/Roles.php" ;
include_once CONTROLLERS . "/UserManagement/UserController.php" ;
include_once ADMINCONTROLLERS . "/Alert.php" ;
$AuthController = new AuthenticationController();
include_once MODELS . "/UserManagement/User.php";
$GLOBALS["AuthController"] = $AuthController;


require ROOT_DIR . '/vendor/autoload.php';

$mail = new PHPMailer(true);             
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'allforkids.fromscratch@gmail.com';                 // SMTP username
$mail->Password = 'from_scratch';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to
$mail->setFrom('allforkids.fromscratch@gmail.com', 'AllForKids Forum');

$GLOBALS["Mail"] = $mail;

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




