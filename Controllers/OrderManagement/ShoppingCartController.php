<?php
    include_once MODELS . "/Order/Order.php";
    include_once MODELS . "/Order/LineItem.php";
    include_once MODELS . "/Order/ShippingMethod.php";
    include_once MODELS . "/Order/OrderStatus.php";

class ShoppingCartController {

    public static function isCustomer() {
        if(AuthenticationController::$is_logged_in){
            return AuthenticationController::getCurrentUser()->is_customer == 1 ? true : false;
        } 
        return false;
    }
    
    public static function getShoppingCartOrder() {
        if(isset($_SESSION["cart"])){
            return Order::retrieveByPK($_SESSION["cart"]);
        }
        return false;
    }

    public static function updateShoppingCart($new_status) {
        if(isset($_SESSION["cart"])){
            $order = Order::retrieveByPK($_SESSION["cart"]);
            $order->Status = $new_status;
        } else {
            return false;
        }
    }
    public static function createShoppingCart(){
        $order = new Order();
        if(AuthenticationController::$is_logged_in){
         AuthenticationController::getCurrentUser()->is_customer = 1;
         AuthenticationController::getCurrentUser()->save();
         $order->customer_id = AuthenticationController::getCurrentUser()->id;
        } 
        $order->reference = $GLOBALS["AuthController"]->generateRandomString();
        $order->status = OrderStatus::ShoppingCart;
        $order->save();
        $_SESSION["cart"] = $order->id;
        return $order->id;
    }
    public static function getLineItems($order_id) {
        return LineItem::retrieveByField("order_id", $order_id);
    }
    public static function createLineItemFromProduct($product_id,$order_id,$quantity){
        $line_item = LineItem::retrieveByField("product_id",$product_id);
        if(!empty($line_item) && isset($line_item[0]) && $line_item) {
            $line_item[0]->quantity += $quantity;
            $line_item[0]->save();
        } else {
            $line_item = new LineItem();
            $line_item->product_id = $product_id;
            $line_item->order_id = $order_id;
            $line_item->quantity += $quantity;
            $line_item->save();
        }
        

    }
    public static function deleteLineItem($line_id){
        $line_item = LineItem::retrieveByPK($line_id);
        $line_item->delete();
    }   
    public static function handleShippingFormRequest() {
        
    }
    
    public static function handlepaymentFormRequest() {
        
    }
    
}

?>