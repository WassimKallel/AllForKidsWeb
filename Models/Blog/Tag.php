<?php

use \Core\ORM\Model;

class Tag extends Model{

    protected static $table= "tag";

    public $id;
    public $name;
}

