<?php

include_once MODELS . "/UserManagement/User.php";
include_once MODELS . "/Order/Order.php";
include_once MODELS . "/Order/LineItem.php";
include_once MODELS . "/Order/ShippingMethod.php";
include_once CONTROLLERS  . "/OrderManagement/ShoppingCartController.php";
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
    public static function handleCheckout() {    
        if(!isset($_POST["shipping_radio"]) || $_POST["shipping_radio"] == 0 ) {
            $shipping_method_price = 0;
        } else {
            $shipping_method = ShippingMethod::retrieveByPK($_POST["shipping_radio"]);
            if(!empty($shipping_method)){
                $shipping_method_price = $shipping_method->extra_fee;
            }else {
                $shipping_method_price = 0;
            }
        }
        $shopping_cart = ShoppingCartController::getShoppingCartOrder();
        if($shopping_cart != false) {
            $line_items = ShoppingCartController::getLineItems($shopping_cart->id);
            $total = 0;
            foreach ($line_items as $line_item) {
                $total += ($line_item->vat * 0.01 * $line_item->total) +  $line_item->total ;
            }
            $shopping_cart->delivery_address = isset($_POST["delivery_address"]) ? $_POST["delivery_address"] : "";
            if(isset($_POST["payment_method"])) {

                $shopping_cart->payment_method = $_POST["payment_method"];
            } else {
                return;
            }
            $shopping_cart->shipping_method_id =  $_POST["shipping_radio"] ;
            $shopping_cart->order_status = OrderStatus::PaymentComplete;
            $shopping_cart->save();
            unset($_SESSION["cart"]);
            $_SESSION["checkout_complte"] = true;
        }else {
            return false;
        }
    }
}

?>