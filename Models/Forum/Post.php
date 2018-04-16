<?php

use \Core\ORM\Model;


class Post extends Model {

	protected static $table= "post";
	
	public $id;
	public $content;
	public $user_id;
	public $thread_id;
	public $creation_date;
}

