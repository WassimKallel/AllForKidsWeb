<?php

use \Core\ORM\Model;

include_once "OrderStatus.php";
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
        switch($this->order_status) {
            case OrderStatus::ShoppingCart :
                return array("class" => "primary", "Name" => "Shopping Cart") ; 
            case OrderStatus::PaymentComplete :
                return array("class" => "success", "Name" => "Payment Complete") ; 
            case OrderStatus::Completed :
                return array("class" => "warning", "Name" => "Completed") ; 
            case OrderStatus::ShoppingCart :
                return array("class" => "danger", "Name" => "Refused") ; 
            default: 
                return array("class" => "danger", "Name" => "Canceled") ; 
        }
    }
}

