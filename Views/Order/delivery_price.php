<?php 

    include_once CONTROLLERS . "/OrderManagement/OrderController.php";
    if($_POST["delivery_method_id"] != 0) {
        $shipping_method = OrderController::getShippingMethod($_POST["delivery_method_id"]);
        if (!empty($shipping_method)) {
            echo $shipping_method->extra_fee;
        }
    }else echo 0;
 
