<?php

use \Core\ORM\Model;

class Comment extends Model {
	protected static $table= "comment";

	public $id;
	public $user_id;
	public $content;
	public $post_id;
	public $creation_date;

}

