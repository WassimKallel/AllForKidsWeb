<?php 
    include_once MODELS . "/UserManagement/User.php" ;
    include_once CONTROLLERS  . "/UserManagement/AuthenticationController.php" ;
    class UserController
    {
        public static function updateProfile($post_data)
        {
            $current_user = AuthenticationController::getCurrentUser();
            if (isset($post_data["username"]) &&
                isset($post_data["password"]) &&
                isset($post_data["first_name"]) &&
                isset($post_data["last_name"]) &&
                isset($post_data["email"])) {
                if(UserController::usernameExist($post_data["username"]) && $post_data["username"] != $current_user->username) {
                    return False;
                }
                $current_user->username = $post_data["username"];
                $current_user->password = AuthenticationController::hash_password($post_data["password"]);
                $current_user->first_name = $post_data["first_name"];
                $current_user->last_name = $post_data["last_name"];
                $current_user->email = $post_data["email"];
                $current_user->save();
                return true;
            }
            return false;
        }
        public static function register($post_data) {
            if (isset($post_data["username"]) &&
            isset($post_data["password"]) &&
            isset($post_data["first_name"]) &&
            isset($post_data["last_name"]) &&
            isset($post_data["email"])) {
            if(UserController::usernameExist($post_data["username"])) {
                return False;
            }
            $user = new User();
            $user->username = $post_data["username"];
            $user->password = AuthenticationController::hash_password($post_data["password"]);
            $user->first_name = $post_data["first_name"];
            $user->last_name = $post_data["last_name"];
            $user->email = $post_data["email"];
            $user->phone = $post_data["phone"];
            $user->role = 0;
            $user->save();
            return true;
        }
        return false;
        }
        public static function usernameExist($username) {
            return !empty(User::retrieveByField("username",$username));
        }
        public static function getAllUsers() {
            return User::all();
        }
        public static function getUser($id) {
            return User::retrieveByPK($id);
        }
        public static function getUsersByRole($role) {
            return User::retrieveByField("role",$role);
        }
    }
