<?php

use \Core\ORM\Model;

class PostTag extends Model{
	protected static $table= "posttag";

	public $id;
	public $user_id; 
	public $tag_id; 
}
