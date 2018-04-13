<?php

use \Core\ORM\Model;

class User extends Model {

    protected static $table= "Users";
    public $id;
    public $username;
    public $user_role = 0;
    public $first_name;
    public $last_name;
    public $email;
    public $password;
    public $is_customer;


    public function getFullName() {
        return $this->first_name . ' ' . $this->last_name;
    }
}

