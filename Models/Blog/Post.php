<?php
class Post {
	public $id;
	public $user_id; 
	public $title; 
	public $content; 
	public $creation_date;


    function __construct($id, $user_id, $title, $content, $creation_date){
			$this->id=$id;
			$this->user_id=$user_id;
			$this->title=$title;
			$this->content=$content;
			$this->creation_date = $creation_date;
    }
}
