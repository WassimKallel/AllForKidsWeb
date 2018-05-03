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
                        <h3 class="sub-title"> listed products in your cart</h3>
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
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- Looop here -->
                                                <tr>
                                                    <td class="image">
                                                        <div class="white-bg cart-img">
                                                            <a class="media-link" href="#"><img src="assets/img/cart/cart-1.png" alt=""></a> 
                                                        </div>
                                                    </td>
                                                    <td class="description">
                                                        <a href="#">Noddy Hooded Sweatshirt Full Sleeves</a> 
                                                        <p>Color : Red</p>
                                                        <p>Size : 2-4 Year</p>
                                                        <a href="#" class="remove pink-color"><i class="fa fa-times"></i> Remove </a>
                                                    </td>                                                    
                                                    <td class="quantity">
                                                        <div class="quantity buttons-add-minus">
                                                            02
                                                        </div>
                                                    </td>
                                                    <td class="total"> <strong> $200 </strong> </td> 
                                                </tr>     
                                                <!-- End loop   -->
                                            </tbody>                               
                                        </table>
                                        <div class="continue-shopping">
                                            <div class="shp-btn">
                                                <a class="blue-btn btn" href="#">Continue Shopping<i class="fa fa-caret-right"></i></a>
                                            </div>
                                            <div class="cart-sub-total">
                                                <span>Subtotal:</span>
                                                <strong class="pink-color">$700</strong>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-5">
                                <div class="light-bg default-box-shadow cart_totals_wrap">                                 
                                    <div class="cart_totals_box">
                                        <div class="title-wrap">
                                            <h2 class="section-title">
                                                <span>
                                                    <span class="funky-font blue-tag">Cupon </span>
                                                    <span class="italic-font">code enter here</span>
                                                </span>
                                            </h2>
                                        </div>
                                        <div class="newsletter-form">
                                            <form class="newsletter">                                       
                                                <div class="form-group col-sm-7 no-padding">                                     
                                                    <label class="sr-only">Enter your coupon code</label>
                                                    <input type="text" class="form-control" placeholder="Enter your coupon code">
                                                </div>
                                                <div class="form-group col-sm-5 no-padding">
                                                    <button type="submit" class="blue-btn submit-btn btn">apply</button>
                                                </div>                                        
                                            </form>                                           
                                        </div>
                                        <table class="cart_totals">
                                            <tr>
                                                <th>Subtotal:</th>
                                                <td><strong>$700</strong></td>
                                            </tr>
                                            <tr>
                                                <th>Shipping Cost :</th>
                                                <td><strong>$20</strong></td>
                                            </tr>
                                            <tr class="cupon-off">
                                                <th>Cupon off :</th>
                                                <td><strong class="blue-color">-$50</strong></td>
                                            </tr>
                                            <tr class="grand-total">
                                                <th>Total :</th>
                                                <td><strong class="pink-color">$670</strong></td>
                                            </tr>
                                        </table>                                       
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Order Part --> 
                    <?php if(!AuthenticationController::$is_logged_in) { ?>  
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
                                <h2 class="title-2 sub-title-small">Sign In</h2>
                                <form>                                    
                                    <div class="form-group">
                                        <input type="text" required="required" class="form-control" placeholder="Username or email">
                                        <i class="blue-color fa fa-user"></i>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" required="required" class="form-control" placeholder="Password">
                                        <i class="pink-color fa  fa-unlock-alt"></i>
                                    </div>
                                    <div class="form-group">
                                        <label class="chk-box"><input type="checkbox" name="optradio">Keep me logged In</label>
                                        <label class="forgot-pwd">
                                            <a class="blue-color title-link" href="#">Forgot Password?</a>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <button class="blue-btn btn" type="submit">Login</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <div class="register-wrap">
                                <h2 class="title-2 sub-title-small">New User Here?</h2>
                                <p class="italic-font">Registration is free and easy!</p>
                                <ul>
                                    <li>Faster checkout</li>
                                    <li>Save multiple shipping addresses</li>
                                    <li>View and track orders and more</li>
                                </ul>
                                <a class="pink-btn btn" href="#"> Create An Account </a>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-3">
                            <div class="social-register-wrap">
                                <h2 class="title-2 sub-title-small">Sign In With Social</h2>                              
                                <a href="#" class="green-btn btn"> <i class="fa fa-facebook"></i> Sign in with Facebook</a>
                                <a href="#" class="blue-btn btn"> <i class="fa fa-twitter"></i> Sign in with Twitter</a>
                            </div>
                        </div>
                    </div>
                    <!-- /Login Part -->
                    <?php }  else { ?>


                    <!-- Shipping Part -->
                    <div class="row space-35">
                        <div class="col-md-6 col-sm-6">
                            <div class="title-wrap space-bottom-25">                                    
                                <h2 class="section-title">
                                    <span>
                                        <span class="funky-font blue-tag"> Delivery </span> 
                                        <span class="italic-font">address</span>
                                    </span>
                                </h2> 
                            </div>
                            <form action="#" class="form-delivery">
                                <div class="row"> 
                                    <div class="col-md-6">
                                        <div class="form-group"><input class="form-control" type="text" placeholder="First Name"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"><input class="form-control" type="text" placeholder="Last Name"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"><input class="form-control" type="text" placeholder="Address 1"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"><input class="form-control" type="text" placeholder="Address 2"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group selectpicker-wrapper">                                
                                            <select class="selectpicker input-price" data-live-search="true" data-width="100%" data-toggle="tooltip" title="Country">
                                                <option>Country</option>
                                                <option>Country</option>
                                                <option>Country</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group selectpicker-wrapper">
                                            <select class="selectpicker input-price" data-live-search="true" data-width="100%" data-toggle="tooltip" title="City">
                                                <option>City</option>
                                                <option>City</option>
                                                <option>City</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group"><input class="form-control" type="text" placeholder="Postcode/ZIP"></div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group"><input class="form-control" type="text" placeholder="Email"></div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group"><input class="form-control" type="text" placeholder="Phone Number"></div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group"><textarea class="form-control" placeholder="Addıtıonal Informatıon" name="name" cols="30" rows="10"></textarea></div>
                                    </div>       
                                </div>
                            </form>                    
                        </div>                        
                        <div class="col-md-6 col-sm-6">
                            <div class="title-wrap space-bottom-20">                                    
                                <h2 class="section-title">
                                    <span>
                                        <span class="funky-font pink-tag"> Deliver to </span> 
                                        <span class="italic-font">different address</span>
                                    </span>
                                </h2> 
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline">
                                    <input id="diff-address" type="checkbox"> Ship to a different address? 
                                </label>
                            </div>
                            <form action="#" class="form-delivery-different">
                                <div class="row">                              
                                    <div class="col-md-6">
                                        <div class="form-group"><input class="form-control" type="text" placeholder="First Name"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"><input class="form-control" type="text" placeholder="Last Name"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"><input class="form-control" type="text" placeholder="Address 1"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"><input class="form-control" type="text" placeholder="Address 2"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group selectpicker-wrapper">                                
                                            <select class="selectpicker input-price" data-live-search="true" data-width="100%" data-toggle="tooltip" title="Country">
                                                <option>Country</option>
                                                <option>Country</option>
                                                <option>Country</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group selectpicker-wrapper">
                                            <select class="selectpicker input-price" data-live-search="true" data-width="100%" data-toggle="tooltip" title="City">
                                                <option>City</option>
                                                <option>City</option>
                                                <option>City</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group"><input class="form-control" type="text" placeholder="Postcode/ZIP"></div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group"><input class="form-control" type="text" placeholder="Email"></div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group"><input class="form-control" type="text" placeholder="Phone Number"></div>
                                    </div>                                
                                </div>
                            </form>
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Notes about your order, e.g. special notes for delivery." name="name" cols="30" rows="7"></textarea>
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
                                <li class="payment_method_paypal">                                    
                                    <label id="paypal-transfer" for="payment_method_paypal">
                                        <input id="payment_method_paypal" type="radio" class="input-radio" name="payment_method" value="paypal"  data-order_button_text="Proceed to PayPal" />
                                        PayPal <img src="../../../www.paypalobjects.com/webstatic/mktg/Logo/AM_mc_vs_ms_ae_UK.png" alt="PayPal Acceptance Mark" />
                                        <a href="#" class="about_paypal"   title="What is PayPal?">What is PayPal?    </a>
                                    </label><br>
                                    <div class="paypal-transfer-msg payment_box msg-box payment_method_paypal" style="display:none;">
                                        <p>Pay via PayPal; you can pay with your credit card if you don&#8217;t have a PayPal account.</p>
                                    </div>
                                </li>
                            </ul>

                            <div class="form-row place-order">
                                <a class="blue-btn btn" href="index-2.html">Home Page</a>                            
                                <label class="green-btn btn" >
                                    <input type="submit" class="button alt " name="woocommerce_checkout_place_order" id="place_order" value="Place order" data-value="Place order" />
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- Payment Part -->
                    <?php } ?>
                </div>
            </section>
            <!-- / Checkout  Ends -->


        <?php include VIEWS . "/partial/footer.php" ; ?>
        </main>
    </body>
</html>