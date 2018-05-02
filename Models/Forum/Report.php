<?php

use \Core\ORM\Model;


class Report extends Model {

	protected static $table= "report";
	
	public $id;
	public $user_id;
    public $post_id;
}

