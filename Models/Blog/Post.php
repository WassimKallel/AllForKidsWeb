<?php

use \Core\ORM\Model;

class Post extends Model{
	protected static $table= "blog_post";

	public $id;
	public $user_id; 
	public $title; 
	public $content; 
	public $creation_date;
	public $image_path;
	public $online;
}
