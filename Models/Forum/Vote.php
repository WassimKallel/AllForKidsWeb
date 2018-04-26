<?php

use \Core\ORM\Model;


class Vote extends Model {

	protected static $table= "vote";
	
	public $id;
	public $user_id;
	public $post_id;
	public $vote;
}

