<?php

use \Core\ORM\Model;


class Order extends Model {

    protected static $table= "order";
    public $id;
    public $reference;
    public $order_status;
    public $shipping_method_id;
    public $delivery_address;
    public $customer_id;

    public function getStatus(){
        return array("color" => "", "Name" => "") ; 
    }
}

