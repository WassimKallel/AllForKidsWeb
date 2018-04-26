<?php

use \Core\ORM\Model;

class Topic extends Model{

    protected static $table= "topic";

    public $id;
    public $name;
    public $online;
}

