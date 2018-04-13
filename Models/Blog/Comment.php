<?php
class Comment {
	public $id;
	public $user_id;
	public $content;
	public $post_id;
	public $creation_date;

    function __construct($id, $user_id, $content, $post_id, $creation_date){
			$this->id=$id;
			$this->user_id=$user_id;
			$this->post_id=$post_id;
			$this->content=$content;
			$this->creation_date=$creation_date;
    }
}

