<?php

use \Core\ORM\Model;


class ShippingMethod extends Model {

    protected static $table= "shipping_method";
    public $id;
    public $name;
    public $extra_fee;
    public $active;


}

