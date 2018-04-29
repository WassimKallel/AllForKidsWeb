<?php

use \Core\ORM\Model;

class LineItem extends Model {

    protected static $table= "line_item";
    public $id;
    public $order_id;
    public $product_id;
    public $quantity;
    public $total_ht;
    public $vat;

}

