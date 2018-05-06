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
    public $payment_method;
    public $creation_date ;

  
    public function save() {
        if(!$this->creation_date) {
            $this->creation_date = date('Y-m-d H:i:s');
        }
        parent::save();
    }

    public function getStatus(){
        return array("color" => "", "Name" => "") ; 
    }
}

