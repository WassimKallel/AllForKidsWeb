<?php 

    include_once CONTROLLERS . "/OrderManagement/OrderController.php";
    $total = 0;
   
    $shopping_cart = ShoppingCartController::getShoppingCartOrder();
    $line_items = array();
    if(!empty($shopping_cart)) {
        $line_items = ShoppingCartController::getLineItems($shopping_cart->id);
    }
    if (!empty($line_items)) {
        foreach($line_items as $line_item) {
            $total += $line_item->total + ($line_item->total * $line_item->vat * 0.01) ;
        }
    }
    if($_POST["delivery_method_id"] != 0) { 
        $shipping_method = OrderController::getShippingMethod($_POST["delivery_method_id"]);
        if (!empty($shipping_method))  {
            echo ($total + $shipping_method->extra_fee);
        }

    }else  echo $total;
   
    

?>