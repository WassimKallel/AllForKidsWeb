<?php 

class AuthenticationController {
    
    public static $AuthenticationController;
    public static $current_user;

    public static function getCurrentUser(){
        return $current_user ;   
    }

    public static function getInstance() {
        if (!$AuthenticationController) {
            $AuthenticationController = new $AuthenticationController();
        }
        return $AuthenticationController;
    }
    public function __construct() {
        
    }
    public function updateSession($user_id) {

    }

    public function checkSession() {
        
    }

    public function logout() {

    }
    /**
     *
     */
    public function login($username, $password) {

        return true;
    }
}
