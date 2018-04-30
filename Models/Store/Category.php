<?php

use \Core\ORM\Model;


class Category extends Model {

    protected static $table= "product_category";
    public $id;
    public $name;
    public $active;

}

