<?php
class Post {
    public $id, $content, $user_id, $thead_id, $creation_date;

    function __construct($id, $content, $user_id, $thead_id, $creation_date){
			$this->id=$id;
			$this->content=$content;
			$this->user_id=$user_id;
			$this->thead_id=$thead_id;
			$this->creation_date=$creation_date;
    }
}

