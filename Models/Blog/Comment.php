<?php
class Comment {
    public $id, $user_id, $content, $post_id, $creation_date;


    function __construct($id, $user_id, $content, $post_id, $creation_date){
			$this->id=$id;
			$this->user_id=$user_id;
			$this->post_id=$post_id;
			$this->content=$content;
			$this->creation_date=$creation_date;
    }
}

