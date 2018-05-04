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
        if(!empty($_SESSION["cart"])){
            $order = Order::retrieveByPK(intval($_SESSION["cart"]));
            return !empty($order) ? $order : false;
        }
        return false;
    }

    public static function handleShoppingCartOnLogin() {
        if(AuthenticationController::$is_logged_in) {
            $orders = Order::sql("SELECT * from `:table` Where customer_id = ? and order_status = ? ;" ,array(AuthenticationController::getCurrentUser()->id, OrderStatus::ShoppingCart)); 
            
            
         
            if(!empty($orders)){
                $order_from_session = ShoppingCartController::getShoppingCartOrder();
            
                
                if($order_from_session != false && $order_from_session->id != $orders[0]->id) {
                    foreach(ShoppingCartController::getLineItems($orders[0]->id) as $line_item) {
                        $line_item->order_id = $order_from_session->id;
                        $line_item->save();
                    }
                    $order_from_session->customer_id = AuthenticationController::getCurrentUser()->id;
                    $order_from_session->save();
                    AuthenticationController::getCurrentUser()->is_customer = 1;
                    AuthenticationController::getCurrentUser()->save();
                    $orders[0]->delete();
                } else {
                    $_SESSION["cart"] = $orders[0]->id;
                    $order_from_session = ShoppingCartController::getShoppingCartOrder();
                    $order_from_session->customer_id = AuthenticationController::getCurrentUser()->id;
                    $order_from_session->save();
                    AuthenticationController::getCurrentUser()->is_customer = 1;
                    AuthenticationController::getCurrentUser()->save();
                }
            } else {
                $order_from_session = ShoppingCartController::getShoppingCartOrder();
                if($order_from_session) { 
                    $order_from_session->customer_id = AuthenticationController::getCurrentUser()->id;
                    $order_from_session->save();
                    AuthenticationController::getCurrentUser()->is_customer = 1;
                    AuthenticationController::getCurrentUser()->save();
                }
            }
        }
    }

    public static function updateShoppingCart($new_status) {
        if(isset($_SESSION["cart"])){
            $order = Order::retrieveByPK($_SESSION["cart"]);
            $order->order_status = $new_status;
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
        $order->order_status = OrderStatus::ShoppingCart;
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
            $line_item[0]->order_id = $order_id;
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
        $order_id = $line_item->order_id;
        $line_item->delete();
        createShoppingCart::deleteOrderIfNoItems($order_id);

    }   
    
    public static function deleteOrderIfNoItems($order_id) {
        $line_items = LineItem::retrieveByField("order_id",$order_id);
        if(empty($line_items)) {
            $order = Order::retrieveByPK($order_id);
            $order->delete();
        }
    }
    public static function handleShippingFormRequest() {
        
    }
    
    public static function handlepaymentFormRequest() {
        
    }
    
}

?>