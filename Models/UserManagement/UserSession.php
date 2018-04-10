<?php 

 
class UserSession extends Model {

    protected static  $table = 'user_sessions';
    public $user_id; //Foreign key
    public $session_token;
    
}