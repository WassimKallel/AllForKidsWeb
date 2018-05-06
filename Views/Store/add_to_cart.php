<?php
    if(isset($_POST["product_id"])){ 
        include_once CONTROLLERS . '/StoreManagement/ProductController.php';
        include_once CONTROLLERS . '/OrderManagement/ShoppingCartController.php';
        $product = ProductController::getProduct($_POST["product_id"]);
        $order = ShoppingCartController::getShoppingCartOrder();
   
        // handle addd to cart logic
        if($order === false ) {
            var_dump("test");
            $order_id = ShoppingCartController::createShoppingCart();
        } else {
            $order_id = $order->id;
        }
  
        ShoppingCartController::createLineItemFromProduct($_POST["product_id"],$order_id,$_POST["quantity"]);
?>
<div class="modal fade" id="product-preview" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content space-40">
                    <a aria-hidden="true" data-dismiss="modal" class="sb-close-btn close fa fa-times" href="#"></a>

                    <button aria-hidden="true" data-dismiss="modal" class="close sb-close-btn" type="button">
                        <i class="fa fa-times"></i>
                    </button>
    <div class="alert alert-success" role="alert">
       Item added successfully to your shopping cart.
    </div>
    </div>
            </div>
        </div>

<?php }else {
    ?>
    <div class="modal fade" id="product-preview" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content space-40">
                    <a aria-hidden="true" data-dismiss="modal" class="sb-close-btn close fa fa-times" href="#"></a>

                    <button aria-hidden="true" data-dismiss="modal" class="close sb-close-btn" type="button">
                        <i class="fa fa-times"></i>
                    </button>
                    <div class="alert alert-danger" role="alert">
        Item couldn't be added to the cart, please try again later.
    </div>
    </div>
            </div>
        </div>

<?php
} ?>