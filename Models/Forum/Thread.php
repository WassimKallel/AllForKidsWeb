<?php

use \Core\ORM\Model;

class Thread extends Model{

    protected static $table= "thread";

    public $id;
    public $title;
    public $topic_id;
}

