<?php

use \Core\ORM\Model;


class Store extends Model {

    protected static $table= "stores";
    public $id;
    public $lon;
    public $lat;
    public $name;

}

