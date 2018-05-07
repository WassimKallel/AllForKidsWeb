<?php

use \Core\ORM\Model;
include_once CONTROLLERS . "/UserManagement/Roles.php";

class User extends Model {
    // Updating UserManagement Controllers is required when editing the User Model.
    protected static $table= "user";
    public $id;
    public $username;
    public $role = 0;
    public $first_name;
    public $last_name;
    public $email;
    public $password;
    public $is_customer;
    public $avatar_path;
    public $active;
    public $phone;
    public $address;


    public function getFullName() {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function getRole() {
        return Roles::search(intval($this->role));
    }

    public function getAvatar() {
		if($this->avatar_path == null) {
			return DATA_URL . 'defaults/default-user.png';
		} else {
			return DATA_URL . $this->avatar_path;
		}
	}
    
}

