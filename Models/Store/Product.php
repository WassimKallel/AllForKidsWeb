<?php

use \Core\ORM\Model;


class Product extends Model {

    protected static $table= "products";
    public $id;
    public $name;
    public $image;
    public $quantity;
    public $category_id;
    public $unit_price;
    public $description;
    public $short_description;
    public $reference;
    public $vat_rate;

}

