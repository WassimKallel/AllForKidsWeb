

<?php

$line_items = array();
$shopping_cart = ShoppingCartController::getShoppingCartOrder();
if ($shopping_cart){
    $line_items = ShoppingCartController::getLineItems($shopping_cart->id);
    include_once CONTROLLERS . "/StoreManagement/ProductController.php";
} 
$line_items_count = count($line_items);
$total = 0;     
include_once CONTROLLERS . "/OrderManagement/OrderController.php";
$shipping_methods = OrderController::getAllSipphingMethods();

if(isset($_POST["checkout_submit"])) {
    OrderController::handleCheckout();
}
?>
<?php include VIEWS . "/partial/header.php" ; ?>

    <body id="home" class="wide">
        <!-- WRAPPER -->
        <main class="wrapper"> 
        <?php include VIEWS . "/partial/menu.php" ; ?>


            <!-- Breadcrumbs Start -->
            <section class="breadcrumb-bg margin-bottom-80">     
                <span class="gray-color-mask color-mask"></span>
                <div class="theme-container container">
                    <div class="site-breadcrumb relative-block space-75">
                        <h2 class="section-title">
                            <span>
                                <span class="funky-font blue-tag">Check</span> 
                                <span class="italic-font">Out</span>
                            </span>
                        </h2>
                        <h3 class="sub-title"> Your Shopping Cart</h3>
                        <hr class="dash-divider">
                        <ol class="breadcrumb breadcrumb-menubar">
                            <li><a href="#">Home</a>  > <span class="blue-color">Checkout</span> </li>                             
                        </ol>
                    </div>  
                </div>
            </section>
            <!-- / Breadcrumbs Ends -->

            <!-- Checkout  Start -->
            <section id="checkout" class="checkout-wrap"> 
                <div class="theme-container container">  
        
                <?php 
                                    if($line_items_count > 0) {
                                ?>   
                    <!-- Order Part -->
                    <div class="cart-collaterals space-40">
                        <div class="row">
                            <div class="title-wrap col-sm-12">                                    
                                <h2 class="section-title">
                                    <span>
                                        <span class="funky-font blue-tag">Order</span> 
                                        <span class="italic-font">List</span>
                                    </span>
                                </h2> 
                            </div>
                            <div class="col-md-8 col-sm-7">
                                <div class="light-bg default-box-shadow">
                                    <form class="cart-form">
                                        <table class="product-table">
                                            <thead>
                                                <tr>
                                                    <th>Img</th>                                
                                                    <th>Product Name</th>                                                    
                                                    <th>QTY</th>
                                                    <th>Price</th> 
                                                    <th>Vat Rate</th> 
                                                    <th>Price TTC</th> 
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php $total = 0; 
                                            foreach($line_items as $line_item) {
                                                
                                                $product = ProductController::getProduct($line_item->product_id);
                                                $total += ($product->unit_price * $line_item->quantity)  + ($product->unit_price * $line_item->quantity * ($product->vat_rate * 0.01));
                                                ?>
                                                <tr>
                                                    <td class="image">
                                                        <div class="white-bg cart-img">
                                                            <a class="media-link" href="#"><img src="assets/img/cart/cart-1.png" alt=""></a> 
                                                        </div>
                                                    </td>
                                                    <td class="description">
                                                        <a href="#"><?= $product->name ?></a> 
                                                        <a href="" onclick="deleteLineItem('line_<?= $line_item->id ?>',<?= $line_item->id ?>); return" class="remove pink-color"><i class="fa fa-times"></i> Remove </a>
                                                    </td>                                                    
                                                    <td class="quantity">
                                                        <div class="quantity buttons-add-minus">
                                                           <?= $line_item->quantity ?>
                                                        </div>
                                                    </td>
                                                    <td class=""> <strong> <?= $product->unit_price  ?> DT HT </strong> </td> 
                                                    <td class=""> <strong> <?= $product->vat_rate  ?>% </strong> </td> 
                                                    <td class=""> <strong> <?= $product->unit_price   + $product->unit_price  * ($product->vat_rate * 0.01)  ?> DT TTC </strong> </td> 
                                                </tr>     
                                                
                                                <?php }  ?>
                                            </tbody>                               
                                        </table>
                                        <div class="continue-shopping">
                                            <div class="shp-btn">
                                                <a class="blue-btn btn" href="store">Continue Shopping<i class="fa fa-caret-right"></i></a>
                                            </div>
                                            <div class="cart-sub-total">
                                                <span>Total:</span>
                                                <strong class="pink-color"><?= $total ?> Dt TTC</strong>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-5">
                                <div class="light-bg default-box-shadow cart_totals_wrap">                                 
                                    <div class="cart_totals_box">
                                        <div class="title-wrap">hopping cart is empty
                                            <h2 class="section-title">
                                                <span>
                                                    <span class="funky-font blue-tag">Resume </span>
                                                </span>
                                            </h2>
                                        </div>
                                        <table class="cart_totals">
                                            <tr>
                                                <th>Subtotal:</th>
                                                <td><strong><?= $total ?> </strong> DT Ht</td>
                                            </tr>
                                            <tr>
                                                <th>Shipping Cost :</th>
                                                <td><strong id="shipping_cost">0</strong> Dt TTC</td>
                                            </tr>
                                            <tr class="grand-total">
                                                <th>Total :</th>
                                                <td><strong class="pink-color" id="total_price" ><?= $total ?> </strong> DT TTC</td>
                                            </tr>
                                        </table>                                       
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- /Order Part --> 
                                    <?php } else if(isset($_SESSION["checkout_complte"]) && $_SESSION["checkout_complte"] == true) {
                                        ?>
                                <div class="alert alert-success" role="alert">
                                     Checkout Complete
                                </div>
 
                                        <?php
                                 unset($_SESSION["checkout_complte"]) ;
                                 } else {
                                        ?>
   <div class="alert alert-danger" role="alert">
                                        Your shopping cart is empty
                                </div>

                                    <?php
                                    } ?>
                    <?php if(!AuthenticationController::$is_logged_in ) { ?>  
                    <!-- Login Part -->
                    <div class="row">
                        <div class="title-wrap space-bottom-25 col-sm-12">                                    
                            <h2 class="section-title">
                                <span>
                                    <span class="funky-font blue-tag">Account</span> 
                                    <span class="italic-font">Log In</span>
                                </span>
                            </h2> 
                        </div>
                        <div class="col-sm-4 col-md-5">
                            <div class="login-wrap">
                            
                                <form>                                    
                                <h2 class="title-2 sub-title-small">Sign In</h2>
                                    <div class="form-group">
                                        <a class="blue-btn btn" href="#login-register" data-toggle="modal">Login</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <div class="register-wrap">
                            <h2 class="title-2 sub-title-small">Register</h2>
                                <a class="pink-btn btn" href="register"> Create An Account </a>
                            </div>
                            <br/><br/><br/><br/><br/><br/><br/><br/>
                    </div>
                    <!-- /Login Part -->
                    <?php }  else if ($line_items_count > 0) { ?>

<form method="post" >   
                    <!-- Shipping Part -->
                    <div class="row space-35">
                                            
                        <div class="col-md-6 col-sm-6">
                            <div class="title-wrap space-bottom-20">                                    
                                <h2 class="section-title">
                                    <span>
                                        <span class="funky-font pink-tag"> Deliver to </span> 
                                        <span class="italic-font">different address</span>
                                    </span>
                                </h2> 
                            </div>
                           
                                <input type="radio" name="shipping_radio" value="0" /> Get it From one of our Stores  <br />
                                <?php foreach($shipping_methods as $shipping_method) { ?>
                                <input type="radio" name="shipping_radio" value="<?= $shipping_method->id ?>" /> Specific Address Using : <strong> <?= $shipping_method->name ?> </strong> <br />
                        <?php } ?>
                
                            <div class="form-group" style="display:none"  id="address_field">
                            <label class="form_label"> Delivery Address:  </label>
                                <textarea  class="form-control"  placeholder="Please enter your delivery Address" name="delivery_address" cols="30" rows="7"></textarea>
                            </div>                            
                        </div>  
                    </div>
                    <!-- Shipping Part -->

                    <!-- Payment Part-->
                    <div class="row space-top-20 margin-bottom-80">
                        <div class="title-wrap space-bottom-25 col-sm-12">                                    
                            <h2 class="section-title">
                                <span>
                                    <span class="funky-font blue-tag"> Payments  </span> 
                                    <span class="italic-font">options</span>
                                </span>
                            </h2> 
                        </div>
                        <div class="col-md-12">
                            <ul class="payments-options payment_methods methods">
                                <li class="payment_method_bacs">                                   
                                    <label id="direct-transfer" for="payment_method_bacs">
                                        <input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="bacs"  data-order_button_text="" />
                                        Direct Bank Transfer 
                                    </label><br>
                                    <div class="direct-transfer-msg msg-box payment_box payment_method_bacs" style="display:none;">
                                        <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won&#8217;t be shipped until the funds have cleared in our account.</p>
                                    </div>
                                </li>
                                <li class="payment_method_cheque">                                    
                                    <label id="cheque-transfer" for="payment_method_cheque">
                                        <input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="cheque"  data-order_button_text="" />
                                        Cheque Payment 
                                    </label><br>
                                    <div class="cheque-transfer-msg msg-box payment_box payment_method_cheque" style="display:none;">
                                        <p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                    </div>
                                </li>
                                
                            </ul>

                            <div class="form-row place-order">
                                <a class="blue-btn btn" href="index-2.html">Home Page</a>                            
                                <label class="green-btn btn" >
                                    <input type="submit" class="button alt " name="checkout_submit" id="place_order" value="Place order" data-value="Place order" />
                                </label>
                            </div>
                        </div>
                    </div>
                    </form>
                    <!-- Payment Part -->
                    <?php } ?>
                </div>
            </section>
            <!-- / Checkout  Ends -->


        <?php include VIEWS . "/partial/footer.php" ; ?>
        </main>
    </body>
</html>