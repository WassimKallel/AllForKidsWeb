<?php

include_once MODELS . "/UserManagement/User.php";
include_once MODELS . "/Order/Order.php";
include_once MODELS . "/Order/LineItem.php";
include_once MODELS . "/Order/ShippingMethod.php";

class OrderController {

    public static function getAllCustomers() {
        return User::retrieveByField("is_customer", 1);
    }
    public static function getAllOrders() {
        return Order::all();
    }
    public static function loadCustomer($id) {
        return User::retrieveByPK($id);
    }
    public static function getAllSipphingMethods() {
        return ShippingMethod::all();
    }
    public static function getShippingMethod($id) {
        return ShippingMethod::retrieveByPK($id);
    }

    public static function getOrdersCount() {
        return Order::sql('SELECT count(*) as count FROM :table')[0]->count;
    }
}

?>