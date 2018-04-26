<?php

use \Core\ORM\Model;


class Order extends Model {

    protected static $table= "order";
    public $id;
    public $reference;
    public $status;
    public $shipping_method_id;
    public $customer_id;

    public function getStatus(){
        return array("color" => "", "Name" => "") ; 
    }
}

