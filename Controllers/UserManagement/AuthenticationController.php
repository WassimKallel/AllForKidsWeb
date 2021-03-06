<?php 
include_once MODELS . "/UserManagement/User.php";
include_once MODELS . "/UserManagement/UserSession.php";
class AuthenticationController {
    
    public static $AuthenticationController = null;
    public static $current_user;
    public static $is_logged_in = false;

    public static function getCurrentUser(){
        return AuthenticationController::$current_user ;   
    }

    public static function getInstance() {
        if (!AuthenticationController::$AuthenticationController) {
            AuthenticationController::$AuthenticationController = new AuthenticationController();
        }
        return AuthenticationController::$AuthenticationController;
    }
    public function __construct() {
        
    }
    public static function reloadCurrentUser() {
        AuthenticationController::$current_user = User::retrieveByPk(AuthenticationController::$current_user->id);
    }
    public static function restricted() {
        if (!AuthenticationController::$is_logged_in) {
            header("Location: login");
            exit();
        }
    }
    public static function updateSession($uid,$token) {
        $_SESSION["token"] = $token;
        $_SESSION["uid"] = $uid;
    }


    public function checkCookies($uid,$token) {
        $token = base64_decode($token);
        $uid =  base64_decode($uid);
        $userSession = UserSession::retrieveByField("user_id",$uid);
        if (!empty($userSession)) {
            if (isset($userSession[0]->session_token) && $userSession[0]->session_token == $token) {
                return TRUE;
            }
        }
        return FALSE;
    }

    public function checkSession($uid,$token) {
        $userSession = UserSession::retrieveByField("user_id",$uid);
        if (!empty($userSession)) {
            if (isset($userSession[0]->session_token) && $userSession[0]->session_token == $token) {
                return TRUE;
            }
        }
        return FALSE;
    }

    public static function logout() {
        $is_logged_in = false;
        UserSession::deleteByField("user_id",AuthenticationController::$current_user->id);
        unset($_SESSION["cart"]);
        
    }
    public static function hash_password($password) {
        return password_hash($password,PASSWORD_BCRYPT);
    }
    
    public static function check_password($password, $password_from_db){
        return password_verify($password, $password_from_db) ;
    } 
    public function login($username, $password) {

        $user = User::sql("SELECT * FROM :table WHERE username=? ",array($username));
        if(!empty($user) && AuthenticationController::check_password($password,$user[0]->password)) {
            $token = $this->generateRandomString();
            $this->saveNewSession($user[0]->id,$token);
            return True;
        }
        return False;
    }
    private static function saveNewSession($uid,$token) {
        $_SESSION["token"] = $token;
        $_SESSION["uid"] = $uid;
        UserSession::deleteByField("user_id",$uid);
        $user_session = new UserSession();
        $user_session->user_id = $uid;
        $user_session->session_token = $token;
        $user_session->save();
    }
    public function generateRandomString($size = 20) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $string = '';
        for ($i = 0; $i < $size; ++$i) {
          $string .= $characters[rand(0, $charactersLength - 1)];
        }
        return $string;
      }
}
