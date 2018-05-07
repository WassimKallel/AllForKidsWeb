<?php include VIEWS . "/partial/login_pop_up.php"; ?> 

<?php
$line_items = array();
$shopping_cart = ShoppingCartController::getShoppingCartOrder();
if ($shopping_cart){
    $line_items = ShoppingCartController::getLineItems($shopping_cart->id);
    include_once CONTROLLERS . "/StoreManagement/ProductController.php";
}   
$line_items_count = count($line_items);
$total = 0;     

?>
            <!-- Header -->
            <header class="light-bg">
                <!-- Header top bar starts-->
                <section class="top-bar"> 
                    <div class="bg-with-mask box-shadow">
                        <span class="blue-color-mask color-mask"></span>
                        <div class="container theme-container">           
                            <nav class="navbar navbar-default top-navbar">  
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" >
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <a class="visible-xs logo" href="#"> <img src="assets/img/logo/logo.png" alt="Baby Store"> </a>
                                </div>                           
                                <div class="collapse navbar-collapse no-padding" id="bs-example-navbar-collapse-1">
                                    <ul class="nav navbar-nav">
                                        <li><a href="#"> <span class="fa fa-phone"></span> Call us : 5555555555</a></li>
                                    </ul>
                                    <ul class="nav navbar-nav pull-right">
                                        <li><a href="<?= HOME_DIR ?>">Home</a></li>
                                        <li><a href="contact">Contact Us</a></li>
                                        <li><a href="blog">Blog</a></li>
                                        <li><a href="forum">Forum</a></li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" >My Account <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                            <?php if ($GLOBALS["AuthController"]::$is_logged_in)  {?>
                                                <li><a href="profile">Profile (<?=  $GLOBALS["AuthController"]::getCurrentUser()->getFullName() ?>)</a></li>
                                                <?php if(RoleController::adminAccessGranted()) { ?>
                                                    <li><a href="admin">Admin Dashboard</a></li>
                                                <?php } ?>
                                                <li><a href="logout">Logout</a></li>
                                                <?php } else {
                                                    ?>
                                                <li><a href="#login-register" data-toggle="modal">Register/Login</a></li>
                                                <?php
                                                } ?>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>                         
                            </nav>                            
                        </div>                       
                    </div>
                    <img src="assets/img/pattern/ziz-zag.png" class="blue-zig-zag" alt="..">
                </section>
                <!-- /Header top bar ends -->
                <section class="header-wrapper header fixed">
                    <article class="header-middle">
                        <div class="container theme-container ">       
                            <!-- Logo -->
                            <div class="logo hidden-xs col-md-3  col-sm-3">
                                <a href="index-2.html"><img src="assets/img/logo/logo.png" alt="Baby Store"/></a>
                            </div>
                            <!-- /Logo -->

                            <!-- Header search -->
                            <div class="header-search col-md-6  col-sm-5">                               
                                                        
                            </div>
                            <!-- /Header search -->
                            <div class="header-cart col-md-3  col-sm-4">
                                <div class="cart-wrapper">
                                    <a href="javascript:void(0)" class="btn cart-btn default-btn">
                                        <i class="fa fa-shopping-cart blue-color"></i>
                                        cart:   <span class="blue-color"> <strong > <span id="count"> <?= $line_items_count ?> </span> items </strong> </span>
                                        <span class="fa fa-caret-down"></span>
                                    </a>                                  
                                </div>   
                                <div class="cart-dropdown bg2-with-mask">        
                                <span class="blue-color-mask blue-box-shadow color-mask-radius"></span>
                                    <div class="pos-relative">          
                     <div id="cart_list">
                     
                     <?php include VIEWS . "/Order/cart.php" ?>
                     </div>
                     <div class="chk-out">
                                            <a href="checkout" class="btn default-btn">Checkout</a>
                                    </div>
                                    </div>
                                    </div>
                            </div>
                        </div>
                    </article>

    

                    <article class="header-navigation">
                        <div class="container theme-container ">       
                            <nav class="navbar navbar-default product-menu"> 
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#product-menu" >
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>                               
                                </div>
                                <div class="collapse navbar-collapse no-padding" id="product-menu">
                                    <ul class="nav navbar-nav">
                                    <?php 
                                    include_once CONTROLLERS . "/StoreManagement/ProductController.php";
                                    $categories = ProductController::getAllCategories();
                                    ?>
                                    <?php  $i= 0 ;foreach($categories as $categorie) { if($i > 6) break;
                                        ?>

                                        <li><a href="store_category?id=<?= $categorie->id ?>"><?= $categorie->name ?></a></li>                 
                                      
                                    <?php
                                    $i++;
                                    } ?>
                                        <li><a href="store">All Products</a></li>
                                    
                                    
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </article>

                </section> 
            </header>
            <!-- /Header -->