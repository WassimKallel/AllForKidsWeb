<?php

use \Core\ORM\Model;

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


    public function getFullName() {
        return $this->first_name . ' ' . $this->last_name;
    }
}

