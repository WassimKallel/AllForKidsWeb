<?php AuthenticationController::restricted();?>
<?php $user = AuthenticationController::getCurrentUser(); ?>

<?php include VIEWS .  "/partial/header.php"; ?>
    <body id="home" class="wide">
        <!-- WRAPPER -->
        <main class="wrapper"> 

<?php include VIEWS .  "/partial/menu.php"; ?>
            <!-- CONTENT AREA -->

            <!-- Breadcrumbs Start -->
            <section class="breadcrumb-bg margin-bottom-80">     
                <span class="gray-color-mask color-mask"></span>
                <div class="theme-container container">
                    <div class="site-breadcrumb relative-block space-75">


                        <h3 class="sub-title"> <?= $user->getFullName(); ?></h3>
                        <hr class="dash-divider">

                    </div>  
                </div>
            </section>
            <!-- / Breadcrumbs Ends -->

            <article  class="container theme-container"> 
                <div class="row">
                    <!-- Posts Start -->
                    <aside class="col-md-8 col-sm-8 space-bottom-20">
                        <div class="title-wrap  text-center space-bottom-25">
                            <h2 class="section-title with-border">
                                <span class="white-bg">
                                    <span class="funky-font pink-tag">My</span> 
                                    <span class="italic-font">Account</span>
                                </span>
                            </h2>                                                          
                        </div>
                        <div class="account-details-wrap">
                            <div class="title-2 sub-title-small">  My Account</div>
                            <div class="account-box  light-bg default-box-shadow">
                                <ul>
                                    <li>                                                
                                        <a href="account-info.html">Edit your account information</a>
                                    </li>
                                    <li>                                               
                                        <a href="cng-pw.html">Change your password</a>
                                    </li>
                                    <li>                                              
                                        <a href="address-book.html">Modify your address book entries</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="title-2 sub-title-small"> order and review </div>
                            <div class="account-box  light-bg default-box-shadow">
                                <ul>
                                    <li>
                                        <a href="order-history.html">View your order history</a>
                                    </li>
                                    <li>
                                        <a href="review-rating.html">Your reviews and ratings</a>
                                    </li>
                                    <li>
                                        <a href="return.html">View your retun requests</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="title-2 sub-title-small">  Newsletter </div>
                            <div class="account-box  light-bg default-box-shadow">
                                <ul>
                                    <li>
                                        <a href="newsletter.html">Subscribe / unsubscribe to newsletter</a>
                                    </li>                                           
                                </ul>
                            </div>
                        </div>                                                    
                    </aside>
                    <!-- Posts Ends --> 

                    <!-- Sidebar Start -->
                    <aside class="col-md-4 col-sm-4 space-bottom-20">                        
                        <div class="blog-sidebar-widget light-bg default-box-shadow">
                            <h4 class="widget-title blue-bg"> <span>  Account  </span> </h4>
                            <div class="blog-widget-content">
                                <ul>
                                    <li  class="accout-item"><a href="account-info.html"> Account Information </a></li>
                                    <li  class="accout-item active"><a href="my-account.html">My Account</a></li>                                        
                                    <li  class="accout-item"><a href="cng-pw.html">Change Password</a></li>
                                    <li  class="accout-item"><a href="address-book.html">Address Books</a></li>
                                    <li  class="accout-item"><a href="order-history.html">Order History</a></li>
                                    <li  class="accout-item"><a href="review-rating.html">Reviews and Ratings</a></li>
                                    <li  class="accout-item"><a href="return.html">Returns Requests</a></li>
                                    <li  class="accout-item"><a href="newsletter.html">Newsletter</a></li>
                                    <li  class="accout-item"><a href="myaccount-leftsidebar.html">Left Sidebar</a></li>
                                </ul>
                            </div>
                        </div>                      
                    </aside>
                    <!-- / Sidebar Ends -->     
                </div>
            </article>


            <!-- Testimonials Slider Start -->
            <section id="testimonials-slider" class="space-top-35">
                <div class="bg2-with-mask space-35">
                    <span class="blue-color-mask color-mask"></span>
                    <div class="container theme-container">
                        <div class="testimonials-wrap space-35">
                            <div class="testimonials-slider">
                                <div class="item">
                                    <div class="row">
                                        <div class="testimonials-img col-md-1 col-sm-2">
                                            <a class="" href="#"><img  src="assets/img/partners/testimonials.png" alt=""> </a>

                                        </div>
                                        <div class="testimonials-content col-md-10 col-sm-8">
                                            <p class="italic-font">--- Mauris in nisl justo. Integer dictum dolor at tortor dictum laoreet.  ut pharetra tortor. Phasellus rhoncus, dolor ac ornare tincidunt, tortor tellus finibus risus, vitae vehicula nulla risus at magna. Nunc sodales facilisis neque, Donec et aliquamo. Fusce libero sapien, egestas quis faucibus ornare...!! :) </p>
                                            <h4>- Aditi Doe </h4>
                                            <a class="italic-font" href="#">http://themeforest.net/user/jthemes</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row">
                                        <div class="testimonials-img col-md-1 col-sm-2">
                                            <a class="" href="#"><img  src="assets/img/partners/testimonials.png" alt=""> </a>

                                        </div>
                                        <div class="testimonials-content col-md-10 col-sm-8">
                                            <p class="italic-font">--- Mauris in nisl justo. Integer dictum dolor at tortor dictum laoreet.  ut pharetra tortor. Phasellus rhoncus, dolor ac ornare tincidunt, tortor tellus finibus risus, vitae vehicula nulla risus at magna. Nunc sodales facilisis neque, Donec et aliquamo. Fusce libero sapien, egestas quis faucibus ornare...!! :) </p>
                                            <h4>- Aditi Doe </h4>
                                            <a class="italic-font" href="#">http://themeforest.net/user/jthemes</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row">
                                        <div class="testimonials-img col-md-1 col-sm-2">
                                            <a class="" href="#"><img  src="assets/img/partners/testimonials.png" alt=""> </a>

                                        </div>
                                        <div class="testimonials-content col-md-10 col-sm-8">
                                            <p class="italic-font">--- Mauris in nisl justo. Integer dictum dolor at tortor dictum laoreet.  ut pharetra tortor. Phasellus rhoncus, dolor ac ornare tincidunt, tortor tellus finibus risus, vitae vehicula nulla risus at magna. Nunc sodales facilisis neque, Donec et aliquamo. Fusce libero sapien, egestas quis faucibus ornare...!! :) </p>
                                            <h4>- Aditi Doe </h4>
                                            <a class="italic-font" href="#">http://themeforest.net/user/jthemes</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonials-slider-links">                
                                <span class="prev slider-btn"  data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                </span>
                                <span class="next slider-btn"  data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <img alt=".." class="blue-zig-zag" src="assets/img/pattern/ziz-zag.png">
            </section>
            <!-- / Testimonials Slider Ends -->

            <!-- / CONTENT AREA -->

            <!-- FOOTER -->
            <footer class="footer">
                <div class="bg2-with-mask space-35">
                    <span class="black-mask color-mask"></span>
                    <div class="container theme-container">
                        <div class="row space-top-35">
                            <aside class="col-md-3 col-sm-6">
                                <div class="footer-widget space-bottom-35">
                                    <h3 class="footer-widget-title"> <i class="fa fa-phone-square blue-color"></i>  Contact Us </h3>                                    
                                    <p class="textwidget"> Phasellus placerat rutrum tristique. In hacse platea dictumst.  </p>
                                    <div class="address">
                                        <ul>
                                            <li> <i class="fa fa-phone blue-color"></i> <span> +61 3 8376 6284 </span> </li>
                                            <li> <i class="fa fa-envelope blue-color"></i> <a href="#"> <span> baby.kidsstore@example.com </span> </a></li>
                                            <li> <i class="fa fa-map-marker blue-color"></i> <span>121 King St </span> <span>Melbourne VIC 3000 Australi.</span> </li>                                       
                                        </ul>
                                    </div>
                                    <div class="social-icon">
                                        <ul>
                                            <li> <a href="#"> <i class="fa fa-facebook-square"></i> </a> </li>
                                            <li> <a href="#"> <i class="fa fa-twitter-square"></i>  </a></li>
                                            <li> <a href="#"> <i class="fa fa-pinterest-square"></i>  </a> </li>
                                            <li> <a href="#"> <i class="fa fa-google-plus-square"></i>  </a> </li>                                            
                                        </ul>
                                    </div>
                                </div>
                            </aside>
                            <aside class="col-md-3 col-sm-6">
                                <div class="footer-widget space-bottom-35">
                                    <h3 class="footer-widget-title"> <i class="fa fa-user pink-color"></i> My Account  </h3>                                    
                                    <ul>
                                        <li> <a href="#"> <i class="fa fa-angle-right pink-color"></i>  My Account</a> </li>
                                        <li> <a href="#"> <i class="fa fa-angle-right pink-color"></i>  Personal Information</a></li>
                                        <li> <a href="#"> <i class="fa fa-angle-right pink-color"></i>  Address</a> </li>
                                        <li> <a href="#"> <i class="fa fa-angle-right pink-color"></i>  Discount</a> </li>
                                        <li> <a href="#"> <i class="fa fa-angle-right pink-color"></i>  Order History</a> </li>
                                        <li> <a href="#"> <i class="fa fa-angle-right pink-color"></i>  My Credit Slip </a> </li>
                                    </ul>
                                </div>
                            </aside>
                            <aside class="col-md-3 col-sm-6">
                                <div class="footer-widget space-bottom-35">
                                    <h3 class="footer-widget-title"> <i class="fa fa-cog green-color"></i> Our Services </h3>                                    
                                    <ul>
                                        <li> <a href="#"> <i class="fa fa-angle-right green-color"></i> Shipping & Return</a> </li>
                                        <li> <a href="#"> <i class="fa fa-angle-right green-color"></i> International Shipping </a></li>
                                        <li> <a href="#"> <i class="fa fa-angle-right green-color"></i> Secure Shopping </a> </li>
                                        <li> <a href="#"> <i class="fa fa-angle-right green-color"></i> Affiliates  </a> </li>
                                        <li> <a href="#"> <i class="fa fa-angle-right green-color"></i> Careers </a> </li>
                                        <li> <a href="#"> <i class="fa fa-angle-right green-color"></i> FAQ </a> </li>
                                    </ul>
                                </div>
                            </aside>
                            <aside class="col-md-3 col-sm-6">
                                <div class="footer-widget space-bottom-35">
                                    <h3 class="footer-widget-title"> <i class="fa fa-info-circle golden-color"></i> Information </h3>                                    
                                    <div class="recent-post">
                                        <ul>
                                            <li> <a href="#"> <i class="fa fa-angle-right golden-color"></i> About Us</a> </li>
                                            <li> <a href="#"> <i class="fa fa-angle-right golden-color"></i> Delivery Information </a></li>
                                            <li> <a href="#"> <i class="fa fa-angle-right golden-color"></i> Privacy  & Policy </a> </li>
                                            <li> <a href="#"> <i class="fa fa-angle-right golden-color"></i> Terms & Conditions  </a> </li>
                                            <li> <a href="#"> <i class="fa fa-angle-right golden-color"></i> Manufactures </a> </li>
                                            <li> <a href="#"> <i class="fa fa-angle-right golden-color"></i> Suppliers </a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
                <div class="bg2-with-mask space-20 footer-meta">
                    <span class="black-mask color-mask"></span>                    
                    <div class="container theme-container">
                        <div class="row">
                            <aside class="col-md-6 col-sm-6 copy-rights">
                                <P> © Copyright 2015 by <a href="#" class="blue-color"> baby&amp;kidsstore.com </a> -  Made with <span class="green-color"> jThemes Studio. </span></P>
                            </aside>
                            <aside class="col-md-6 col-sm-6 payment-options">
                                <ul>
                                    <li> <a href="#"> <i class="fa fa-cc "></i> </a> </li>
                                    <li> <a href="#"> <i class="fa fa-cc-visa"></i> </a> </li>
                                    <li> <a href="#"> <i class="fa fa-cc-mastercard"></i> </a> </li>    
                                    <li> <a href="#"> <i class="fa fa-cc-paypal"></i> </a> </li>
                                    <li> <a href="#"> <i class="fa fa-cc-stripe"></i> </a> </li>
                                    <li> <a href="#"> <i class="fa fa-cc-amex"></i> </a> </li>
                                    <li> <a href="#"> <i class="fa fa-cc-discover"></i> </a> </li>
                                </ul>
                            </aside>
                        </div>
                    </div>
                </div>

            </footer>
            <!-- /FOOTER -->

            <!--<div id="to-top" class="to-top"><i class="fa fa-angle-up"></i></div>-->


            <!-- Preview Popup -->             <div class="modal fade" id="product-preview" tabindex="-1" role="dialog" aria-hidden="true">                 <div class="modal-dialog modal-lg">                     <div class="modal-content space-40">                         <a aria-hidden="true" data-dismiss="modal" class="sb-close-btn close fa fa-times" href="#"></a>                         <!--<button aria-hidden="true" data-dismiss="modal" class="close sb-close-btn" type="button"><i class="fa fa-times"></i></button>-->                         <!-- Single Products Start -->                         <div class="clearfix"></div>                         <section id="product-fullwidth" class="clearfix">                              <div class="single-product-wrap">                                       <div class="list-category-details">                                                                    <div class="col-md-7 col-sm-7">                                                                           <!-- Main Slider Start -->                                         <section id="main-slider1" class="carousel slide main-slider">                                               <!--Carousel Slide Button Start-->                                             <div class="slider-pagination col-md-2 col-sm-3  col-xs-3">                                                                 <ul class="product-thumbnails">                                                     <li  data-slide-to="0" data-target="#main-slider1">                                                         <a href="#"><img class="img-responsive" alt="img" src="assets/img/product/single-thumb1.png"></a></li>                                                     <li class="active" data-slide-to="1" data-target="#main-slider1">                                                         <a href="#"><img class="img-responsive" alt="img" src="assets/img/product/single-thumb2.png"></a></li>                                                     <li data-slide-to="2" data-target="#main-slider1">                                                         <a href="#"><img class="img-responsive" alt="img" src="assets/img/product/single-thumb3.png"></a></li>                                                      <li data-slide-to="3" data-target="#main-slider1">                                                         <a href="#"><img class="img-responsive" alt="img" src="assets/img/product/single-thumb4.png"></a></li>                                                  </ul>                                               </div>                                                 <div class="col-md-10 col-sm-9  col-xs-9">                                                 <div class="carousel-inner product-fullwidth light-bg slider">                                                     <div class="item">                                                           <img src="assets/img/product/single-prod1.png" alt="...">                                                     </div>                                                          <div class="item active">                                                           <img src="assets/img/product/single-prod1.png" alt="...">                                                       </div>                                                      <div class="item">                                                           <img src="assets/img/product/single-prod1.png" alt="...">                                                      </div>                                                      <div class="item">                                                           <img src="assets/img/product/single-prod1.png" alt="...">                                                      </div>                                                  </div>                                             </div>                                          </section>                                         <!-- / Main Slider Ends -->                                                                           </div>                                     <div class="col-md-5 col-sm-5">                                         <div class="product-content">                                             <div class="rating">                                                                                                               <span class="star active"></span>                                                 <span class="star active"></span>                                                 <span class="star active"></span>                                                 <span class="star half"></span>                                                 <span class="star"></span>                                                 <div class="product-review">                                                     <ul>                                                         <li>03 Review </li>                                                         <li> | <a href="#"> Add Your Review </a> </li>                                                     </ul>                                                 </div>                                             </div>                                                                                         <div class="product-name">                                                 <a href="#">Noddy Hooded Sweatshirt Full Sleeves</a>                                                                                           </div>                                             <div class="product-price">                                                 <h4 class="pink-btn-small price-line"> $50.00 </h4>                                                 <h4 class="blue-btn-small"> $45.00 </h4>                                             </div>                                             <div class="product-availability">                                                 <ul class="stock-detail">                                                     <li>Available:<strong class="green-color"> <i class="fa fa-check-circle"></i> In Stock </strong> | </li>                                                     <li>Product Id:<strong> #201546 </strong> </li>                                                 </ul>                                                 <hr class="fullwidth-divider">                                                                                         </div>                                             <div class="product-size">                                                 <form class="product-form">                                                     <div class="row">                                                         <div class="form-group selectpicker-wrapper">                                                             <label>SIZE</label>                                                             <select title="Looking to Buy" data-toggle="tooltip" data-width="100%" data-live-search="true" class="selectpicker input-price bs-select-hidden"><option class="bs-title-option" value="">2 - 4 Years</option>                                                                 <option>4 - 6 Years</option>                                                                 <option>6 - 8 Years</option>                                                                 <option>8 - 10 Years</option>                                                             </select>                                                         </div>                                                         <div class="form-group selectpicker-wrapper">                                                             <label>QTY</label>                                                             <select title="Looking to Buy" data-toggle="tooltip" data-width="100%" data-live-search="true" class="selectpicker input-price bs-select-hidden"><option class="bs-title-option" value="">02</option>                                                                 <option>03</option>                                                                 <option>04</option>                                                                 <option>05</option>                                                             </select>                                                         </div>                                                     </div>                                                 </form>                                                 <div class="widget-colors">                                                     <span>Colors:</span>                                                     <label class="rcheckbox-inline"><input type="checkbox" value="" id="brown"> <span></span></label>                                                      <label class="rcheckbox-inline"><input type="checkbox" value="" id="light"> <span></span></label>                                                      <label class="rcheckbox-inline"><input type="checkbox" value="" id="dark"> <span></span></label>                                                      <label class="rcheckbox-inline"><input type="checkbox" value="" id="orange"> <span></span></label>                                                      <label class="rcheckbox-inline"><input type="checkbox" value="" id="blue"> <span></span></label>                                                      <label class="rcheckbox-inline"><input type="checkbox" value="" id="yellow"> <span></span></label>                                                      <label class="rcheckbox-inline"><input type="checkbox" value="" id="green"> <span></span></label>                                                      <label class="rcheckbox-inline"><input type="checkbox" value="" id="white"> <span></span></label>                                                  </div>                                                 <hr class="fullwidth-divider">                                                </div>                                                                                         <div class="add-to-cart">                                                 <a class="blue-btn btn" href="#"> <i class="fa fa-shopping-cart white-color"></i> Add to Cart</a>                                                 <a class="pink-btn btn" href="product-single-fullwidth.html"> Go To Details </a>                                             </div>                                         </div>                                     </div>                                 </div>                                  </div>                                     </section>                         <!-- Single Products Ends -->                     </div>                 </div>             </div>             <!-- / Preview Popup -->              <!-- Popup: Login Register -->
            <div class="modal fade login-register" id="login-register" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">                 
                    <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                    <div class="modal-content light-bg">   
                        <div class="col-sm-8">
                            <div class="title-wrap">
                                <h2 class="section-title">
                                    <span>
                                        <span class="funky-font blue-tag">Welcome</span> 
                                        <span class="italic-font">to the Baby & kids Store</span>
                                    </span>
                                </h2>  
                                <h3 class="sub-title">Sign in Or Register</h3>
                                <hr class="dash-divider-small">                                
                            </div> 
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse at purus eu eros maximus elementum sed eget erat. 
                                esent in varius diam, sit amet ultricies nisi. Maecenas urna odio.</p>
                        </div>                                             
                        <div class="col-sm-6 col-md-5">
                            <div class="login-wrap">
                                <h2 class="title-2 sub-title-small">Sign In</h2>
                                <form>                                    
                                    <div class="form-group">
                                        <input type="text" placeholder="Username or email" class="form-control" required="required" />
                                        <i class="blue-color fa fa-user"></i>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" placeholder="Password" class="form-control" required="required" />
                                        <i class="pink-color fa  fa-unlock-alt"></i>
                                    </div>
                                    <div class="form-group">
                                        <label class="chk-box"><input type="checkbox" name="optradio">Keep me logged In</label>
                                        <label class="forgot-pwd">
                                            <a href="#" class="blue-color title-link">Forgot Password?</a>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="blue-btn btn">Login</button>
                                    </div>
                                </form><!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from event-theme.com/themes/baby-store/my-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Apr 2018 18:52:17 GMT -->
<head>
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Baby Store</title>

        <!-- Favicon -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.html">
        <link rel="shortcut icon" href="assets/ico/favicon.ico">

        <!-- CSS Global -->
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">        
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
        <link href="assets/css/media.css" rel="stylesheet" type="text/css">
        <link href="assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css">        
        <link href="assets/plugins/owl-carousel/owl.theme.css" rel="stylesheet" type="text/css">   
        <link href="assets/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" type="text/css">
        <link href="assets/plugins/jquery-ui-1.11.4.custom/jquery-ui.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/subscribe-better.css" rel="stylesheet" type="text/css">
        <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">        



        <!--[if lt IE 9]>
                <script src="assets/plugins/iesupport/html5shiv.js"></script>
                <script src="assets/plugins/iesupport/respond.js"></script>
                <![endif]-->
    </head>
    <body id="home" class="wide">

        <!-- WRAPPER -->
        <main class="wrapper"> 
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
                                        <li><a href="#"> <span class="fa fa-heart"></span> Wishlist</a></li>
                                        <li><a href="#"> <span class="fa fa-random"></span> Compare</a></li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" >English <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">English</a></li>
                                                <li><a href="#">Dutch</a></li>
                                                <li><a href="#">French</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" >USD <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">POUND</a></li>
                                                <li><a href="#">USD</a></li>
                                                <li><a href="#">EURO</a></li>                                            
                                            </ul>
                                        </li>
                                    </ul>

                                    <ul class="nav navbar-nav pull-right">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" >Home <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="index-2.html">Homepage 1</a></li>
                                                <li><a href="index-2-box-version.html">Homepage 2</a></li>
                                                <li><a href="index-3.html">Homepage 3</a></li>
                                                <li><a href="index-4.html">Homepage 4</a></li>                                                    <li><a href="index-5.html">Homepage 5</a></li>                                                    <li><a href="index-6.html">Homepage 6</a></li>                                                    <li><a href="index-7.html">Homepage 7</a></li>                                                                                     
                                            </ul>
                                        </li>                                       
                                        <li><a href="contact-us.html">Contact Us</a></li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" >Blog <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                                <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                                <li><a href="single-post-right-sidebar.html">Single Post Right Sidebar</a></li>
                                                <li><a href="single-post-left-sidebar.html">Single Post Left Sidebar</a></li>                                            
                                            </ul>
                                        </li>
                                        <li><a href="#">Track Order</a></li>
                                        <li><a href="#login-register" data-toggle="modal">Register/Login</a></li>
                                        <li class="dropdown active">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" >My Account <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="my-account.html">My Account</a></li>                                                
                                                <li><a href="account-info.html"> Account Information </a></li>                                                
                                                <li><a href="cng-pw.html">Change Password</a></li>
                                                <li><a href="address-book.html">Address Books</a></li>
                                                <li><a href="order-history.html">Order History</a></li>
                                                <li><a href="review-rating.html">Reviews and Ratings</a></li>
                                                <li><a href="return.html">Returns Requests</a></li>
                                                <li><a href="newsletter.html">Newsletter</a></li>
                                                <li><a href="myaccount-leftsidebar.html">Left Sidebar</a></li>
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
                                <form action="#" class="search-form">
                                    <div class="search-selectpicker form-group selectpicker-wrapper col-sm-4 no-padding">
                                        <select
                                            class="selectpicker input-price" data-live-search="true" data-width="100%"
                                            data-toggle="tooltip" title="Search In Categories">
                                            <option>Baby Clothes</option>
                                            <option>Kids Clothes</option>
                                            <option>Toys & Books </option>
                                        </select>
                                    </div>
                                    <div class="no-padding col-sm-8 search-cat">
                                        <label>
                                            <span class="screen-reader-text">Search for:</span>
                                            <input type="search" title="Search for:" name="s" value="" placeholder="Search for a Category, Brand or Product" class="search-field">
                                        </label>
                                        <input type="submit" value="Search" class="search-submit">
                                    </div>
                                </form>                              
                            </div>
                            <!-- /Header search -->

                            <!-- Header shopping cart -->
                            <div class="header-cart col-md-3  col-sm-4">
                                <div class="cart-wrapper">
                                    <a href="javascript:void(0)" class="btn cart-btn default-btn">
                                        <i class="fa fa-shopping-cart blue-color"></i>
                                        <span><b> cart: </b></span>   <span class="blue-color"> <strong> (02 items) </strong> </span>
                                        <span class="fa fa-caret-down"></span>
                                    </a>                                  
                                </div>                            
                                <div class="cart-dropdown bg2-with-mask">
                                    <span class="blue-color-mask blue-box-shadow color-mask-radius"></span>
                                    <div class="pos-relative">
                                        <table class="cart-table">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="product-media">                                                            
                                                            <a href="#">  <img alt="product-img" src="assets/img/cart/small-1.png"></a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="product-content">                                                     
                                                            <div class="product-name">
                                                                <a href="#">Noddy Hooded Sweat</a>
                                                                <span> Shirt Full Sleeves </span>
                                                            </div>
                                                            <div class="product-price">
                                                                <h5 class="price"><b> $200.00*2 </b></h5>
                                                                <a href="#" class="delete fa fa-close">  </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>      
                                                <tr>
                                                    <td>
                                                        <div class="product-media">                                                            
                                                            <a href="#"> <img alt="product-img" src="assets/img/cart/small-2.png"></a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="product-content">                                                     
                                                            <div class="product-name">
                                                                <a href="#">Noddy Hooded Sweat</a>
                                                                <span> Shirt Full Sleeves </span>
                                                            </div>
                                                            <div class="product-price">
                                                                <h5 class="price"><b> $100.00*1 </b></h5>
                                                                <a href="#" class="delete fa fa-close">  </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>      
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td>
                                                        <div class="sub-total">
                                                            <span class="title">Total:</span>
                                                            <span class="amount"> <b> $500 </b> </span>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        <div class="chk-out">
                                            <a href="check-out.html" class="btn default-btn">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Header shopping cart -->
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
                                        <li><a href="#">Baby Clothes</a></li>
                                        <li class="dropdown mega-dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Kids Cloth <span class="caret"></span></a>				
                                            <div class="dropdown-menu mega-dropdown-menu">
                                                <div class="">
                                                    <!-- Nav tabs -->
                                                    <ul class="nav nav-tabs" role="tablist">
                                                        <li><a href="#all" role="tab" data-toggle="tab">All</a></li>
                                                        <li><a href="#girls" role="tab" data-toggle="tab">Girl</a></li>
                                                        <li  class="active"><a href="#boys" role="tab" data-toggle="tab">Boy</a></li>
                                                        <li><a href="#new-arrivals" role="tab" data-toggle="tab">New Arrivals</a></li>
                                                        <li><a href="#fashion" role="tab" data-toggle="tab">Fashion</a></li>
                                                        <li><a href="#accessories" role="tab" data-toggle="tab">Accessories</a></li>
                                                        <li><a href="#specials" role="tab" data-toggle="tab">Specials</a></li>
                                                    </ul>  
                                                    <!-- Tab panes -->
                                                    <div class="tab-content light-bg">
                                                        <div class="tab-pane fade" id="all">
                                                            <div class="block-bg">                                                            
                                                                <div class="col-md-3 col-sm-6  menu-block">
                                                                    <div class="sub-list">
                                                                        <h2 class="title-2 sub-title-small">Shop by Category</h2>                                                                
                                                                        <ul>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">ShirtsT-Shirts</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Pajamas</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Onesies & Rompers</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Party Wear</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Kurta & Dhoti Sets</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Night Wear</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Inner Wear</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Theme Costumes</a> </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 col-sm-6  menu-block">
                                                                    <div class="sub-list">
                                                                        <h2 class="title-2 sub-title-small">Shop by Age</h2>
                                                                        <ul>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">2 to 4 years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">2 to 6 years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">6 to 8 years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">8 to 10 years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">10+ years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">2 to 4 years</a> </li>
                                                                            <li> <a href="#"> <strong> Combo Packs</strong> </a> </li>
                                                                            <li> <a href="#"> <strong> On Sale- Boys Clothes </strong> </a> </li>
                                                                            <li> <a href="#"> <strong> On Sale- Girls Clothes </strong> </a> </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 col-sm-6  menu-block">
                                                                    <div class="sub-list">
                                                                        <h2 class="title-2 sub-title-small">Shop by Colors</h2>
                                                                        <ul>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Black</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Blue</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Green</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Red</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Orange</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Pink</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">White</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">All</a> </li>
                                                                        </ul>
                                                                    </div>
                                                                </div> 
                                                                <div class="col-md-3 col-sm-6  menu-block menu-block-img no-padding">
                                                                    <div class="title-wrap">
                                                                        <h2 class="section-title">
                                                                            <span>
                                                                                <span class="funky-font blue-tag">Sale </span> 
                                                                                <span class="italic-font">Today Deal</span>
                                                                            </span>
                                                                        </h2>                                                                   
                                                                        <h3 class="pink-color">Up To <strong> 30% </strong> Off</h3>      
                                                                        <hr class="dash-divider-small">
                                                                        <a href="#" class="blue-color title-link"> Shop Now <i class="fa fa-caret-right"></i> </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="girls">
                                                            <div class="block-bg">
                                                                <div class="col-md-3 col-sm-6  menu-block">
                                                                    <div class="sub-list">
                                                                        <h2 class="title-2 sub-title-small">Shop by Category</h2>                                                                
                                                                        <ul>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">ShirtsT-Shirts</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Pajamas</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Onesies & Rompers</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Party Wear</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Kurta & Dhoti Sets</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Night Wear</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Inner Wear</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Theme Costumes</a> </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 col-sm-6  menu-block">
                                                                    <div class="sub-list">
                                                                        <h2 class="title-2 sub-title-small">Shop by Age</h2>
                                                                        <ul>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">2 to 4 years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">2 to 6 years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">6 to 8 years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">8 to 10 years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">10+ years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">2 to 4 years</a> </li>
                                                                            <li> <a href="#"> <strong> Combo Packs</strong> </a> </li>
                                                                            <li> <a href="#"> <strong> On Sale- Boys Clothes </strong> </a> </li>
                                                                            <li> <a href="#"> <strong> On Sale- Girls Clothes </strong> </a> </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 col-sm-6  menu-block">
                                                                    <div class="sub-list">
                                                                        <h2 class="title-2 sub-title-small">Shop by Colors</h2>
                                                                        <ul>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Black</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Blue</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Green</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Red</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Orange</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Pink</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">White</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">All</a> </li>
                                                                        </ul>
                                                                    </div>
                                                                </div> 
                                                                <div class="col-md-3 col-sm-6  menu-block  menu-block-img no-padding">
                                                                    <div class="title-wrap">
                                                                        <h2 class="section-title">
                                                                            <span>
                                                                                <span class="funky-font blue-tag">Sale </span> 
                                                                                <span class="italic-font">Today Deal</span>
                                                                            </span>
                                                                        </h2>                                                                   
                                                                        <h3 class="pink-color">Up To <strong> 30% </strong> Off</h3>      
                                                                        <hr class="dash-divider-small">
                                                                        <a href="#" class="blue-color title-link"> Shop Now <i class="fa fa-caret-right"></i> </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade  active in" id="boys">
                                                            <div class="block-bg">
                                                                <div class="col-md-3 col-sm-6  menu-block">
                                                                    <div class="sub-list">
                                                                        <h2 class="title-2 sub-title-small">Shop by Category</h2>                                                                
                                                                        <ul>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">ShirtsT-Shirts</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Pajamas</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Onesies & Rompers</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Party Wear</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Kurta & Dhoti Sets</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Night Wear</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Inner Wear</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Theme Costumes</a> </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 col-sm-6  menu-block">
                                                                    <div class="sub-list">
                                                                        <h2 class="title-2 sub-title-small">Shop by Age</h2>
                                                                        <ul>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">2 to 4 years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">2 to 6 years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">6 to 8 years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">8 to 10 years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">10+ years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">2 to 4 years</a> </li>
                                                                            <li> <a href="#"> <strong> Combo Packs</strong> </a> </li>
                                                                            <li> <a href="#"> <strong> On Sale- Boys Clothes </strong> </a> </li>
                                                                            <li> <a href="#"> <strong> On Sale- Girls Clothes </strong> </a> </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 col-sm-6  menu-block">
                                                                    <div class="sub-list">
                                                                        <h2 class="title-2 sub-title-small">Shop by Colors</h2>
                                                                        <ul>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Black</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Blue</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Green</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Red</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Orange</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Pink</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">White</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">All</a> </li>
                                                                        </ul>
                                                                    </div>
                                                                </div> 
                                                                <div class="col-md-3 col-sm-6  menu-block  menu-block-img no-padding">
                                                                    <div class="title-wrap">
                                                                        <h2 class="section-title">
                                                                            <span>
                                                                                <span class="funky-font blue-tag">Sale </span> 
                                                                                <span class="italic-font">Today Deal</span>
                                                                            </span>
                                                                        </h2>                                                                   
                                                                        <h3 class="pink-color">Up To <strong> 30% </strong> Off</h3>      
                                                                        <hr class="dash-divider-small">
                                                                        <a href="#" class="blue-color title-link"> Shop Now <i class="fa fa-caret-right"></i> </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                        <div class="tab-pane fade" id="new-arrivals">
                                                            <div class="block-bg">
                                                                <div class="col-md-3 col-sm-6  menu-block">
                                                                    <div class="sub-list">
                                                                        <h2 class="title-2 sub-title-small">Shop by Category</h2>                                                                
                                                                        <ul>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">ShirtsT-Shirts</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Pajamas</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Onesies & Rompers</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Party Wear</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Kurta & Dhoti Sets</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Night Wear</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Inner Wear</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Theme Costumes</a> </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 col-sm-6  menu-block">
                                                                    <div class="sub-list">
                                                                        <h2 class="title-2 sub-title-small">Shop by Age</h2>
                                                                        <ul>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">2 to 4 years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">2 to 6 years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">6 to 8 years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">8 to 10 years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">10+ years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">2 to 4 years</a> </li>
                                                                            <li> <a href="#"> <strong> Combo Packs</strong> </a> </li>
                                                                            <li> <a href="#"> <strong> On Sale- Boys Clothes </strong> </a> </li>
                                                                            <li> <a href="#"> <strong> On Sale- Girls Clothes </strong> </a> </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 col-sm-6  menu-block">
                                                                    <div class="sub-list">
                                                                        <h2 class="title-2 sub-title-small">Shop by Colors</h2>
                                                                        <ul>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Black</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Blue</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Green</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Red</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Orange</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Pink</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">White</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">All</a> </li>
                                                                        </ul>
                                                                    </div>
                                                                </div> 
                                                                <div class="col-md-3 col-sm-6  menu-block  menu-block-img no-padding">
                                                                    <div class="title-wrap">
                                                                        <h2 class="section-title">
                                                                            <span>
                                                                                <span class="funky-font blue-tag">Sale </span> 
                                                                                <span class="italic-font">Today Deal</span>
                                                                            </span>
                                                                        </h2>                                                                   
                                                                        <h3 class="pink-color">Up To <strong> 30% </strong> Off</h3>      
                                                                        <hr class="dash-divider-small">
                                                                        <a href="#" class="blue-color title-link"> Shop Now <i class="fa fa-caret-right"></i> </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="fashion">
                                                            <div class="block-bg">
                                                                <div class="col-md-3 col-sm-6  menu-block">
                                                                    <div class="sub-list">
                                                                        <h2 class="title-2 sub-title-small">Shop by Category</h2>                                                                
                                                                        <ul>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">ShirtsT-Shirts</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Pajamas</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Onesies & Rompers</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Party Wear</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Kurta & Dhoti Sets</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Night Wear</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Inner Wear</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Theme Costumes</a> </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 col-sm-6  menu-block">
                                                                    <div class="sub-list">
                                                                        <h2 class="title-2 sub-title-small">Shop by Age</h2>
                                                                        <ul>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">2 to 4 years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">2 to 6 years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">6 to 8 years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">8 to 10 years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">10+ years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">2 to 4 years</a> </li>
                                                                            <li> <a href="#"> <strong> Combo Packs</strong> </a> </li>
                                                                            <li> <a href="#"> <strong> On Sale- Boys Clothes </strong> </a> </li>
                                                                            <li> <a href="#"> <strong> On Sale- Girls Clothes </strong> </a> </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 col-sm-6  menu-block">
                                                                    <div class="sub-list">
                                                                        <h2 class="title-2 sub-title-small">Shop by Colors</h2>
                                                                        <ul>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Black</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Blue</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Green</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Red</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Orange</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Pink</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">White</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">All</a> </li>
                                                                        </ul>
                                                                    </div>
                                                                </div> 
                                                                <div class="col-md-3 col-sm-6  menu-block  menu-block-img no-padding">
                                                                    <div class="title-wrap">
                                                                        <h2 class="section-title">
                                                                            <span>
                                                                                <span class="funky-font blue-tag">Sale </span> 
                                                                                <span class="italic-font">Today Deal</span>
                                                                            </span>
                                                                        </h2>                                                                   
                                                                        <h3 class="pink-color">Up To <strong> 30% </strong> Off</h3>      
                                                                        <hr class="dash-divider-small">
                                                                        <a href="#" class="blue-color title-link"> Shop Now <i class="fa fa-caret-right"></i> </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="accessories">
                                                            <div class="block-bg">
                                                                <div class="col-md-3 col-sm-6  menu-block">
                                                                    <div class="sub-list">
                                                                        <h2 class="title-2 sub-title-small">Shop by Category</h2>                                                                
                                                                        <ul>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">ShirtsT-Shirts</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Pajamas</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Onesies & Rompers</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Party Wear</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Kurta & Dhoti Sets</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Night Wear</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Inner Wear</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Theme Costumes</a> </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 col-sm-6  menu-block">
                                                                    <div class="sub-list">
                                                                        <h2 class="title-2 sub-title-small">Shop by Age</h2>
                                                                        <ul>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">2 to 4 years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">2 to 6 years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">6 to 8 years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">8 to 10 years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">10+ years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">2 to 4 years</a> </li>
                                                                            <li> <a href="#"> <strong> Combo Packs</strong> </a> </li>
                                                                            <li> <a href="#"> <strong> On Sale- Boys Clothes </strong> </a> </li>
                                                                            <li> <a href="#"> <strong> On Sale- Girls Clothes </strong> </a> </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 col-sm-6  menu-block">
                                                                    <div class="sub-list">
                                                                        <h2 class="title-2 sub-title-small">Shop by Colors</h2>
                                                                        <ul>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Black</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Blue</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Green</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Red</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Orange</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Pink</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">White</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">All</a> </li>
                                                                        </ul>
                                                                    </div>
                                                                </div> 
                                                                <div class="col-md-3 col-sm-6  menu-block  menu-block-img no-padding">
                                                                    <div class="title-wrap">
                                                                        <h2 class="section-title">
                                                                            <span>
                                                                                <span class="funky-font blue-tag">Sale </span> 
                                                                                <span class="italic-font">Today Deal</span>
                                                                            </span>
                                                                        </h2>                                                                   
                                                                        <h3 class="pink-color">Up To <strong> 30% </strong> Off</h3>      
                                                                        <hr class="dash-divider-small">
                                                                        <a href="#" class="blue-color title-link"> Shop Now <i class="fa fa-caret-right"></i> </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="specials">
                                                            <div class="block-bg">
                                                                <div class="col-md-3 col-sm-6">
                                                                    <div class="product-details">
                                                                        <div class="product-media">                                                            
                                                                            <span class="hover-image white-bg">
                                                                                <img src="assets/img/product/cat-7.png" alt="">
                                                                            </span>
                                                                            <img alt="product-img" src="assets/img/product/product1.png">
                                                                            <div class="product-new">
                                                                                <div class="blue-new-tag new-tag">
                                                                                    <a href="#" class="funky-font">New</a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-overlay">
                                                                                <a href="#" class="addcart blue-background fa fa-shopping-cart"></a>                                                                
                                                                                <a href="#" class="likeitem green-background fa fa-heart"></a>
                                                                                <a class="preview pink-background fa fa-eye" href="#product-preview" data-toggle="modal"></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-content">
                                                                            <div class="rating">                                                              
                                                                                <span class="star active"></span>
                                                                                <span class="star active"></span>
                                                                                <span class="star active"></span>
                                                                                <span class="star half"></span>
                                                                                <span class="star"></span>
                                                                            </div>
                                                                            <div class="product-name">
                                                                                <a href="#">Babyhug Frock Style Top And Leggings</a>

                                                                            </div>
                                                                            <div class="product-price">
                                                                                <h4 class="pink-btn-small"> $50.00 </h4>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 col-sm-6">
                                                                    <div class="product-details">
                                                                        <div class="product-media">                                                            
                                                                            <span class="hover-image white-bg">
                                                                                <img src="assets/img/product/cat-7.png" alt="">
                                                                            </span>
                                                                            <img alt="product-img" src="assets/img/product/product2.png">                                                                            
                                                                            <div class="product-overlay">
                                                                                <a href="#" class="addcart blue-background fa fa-shopping-cart"></a>                                                                
                                                                                <a href="#" class="likeitem green-background fa fa-heart"></a>
                                                                                <a class="preview pink-background fa fa-eye" href="#product-preview" data-toggle="modal"></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-content">
                                                                            <div class="rating">                                                              
                                                                                <span class="star active"></span>
                                                                                <span class="star active"></span>
                                                                                <span class="star active"></span>
                                                                                <span class="star half"></span>
                                                                                <span class="star"></span>
                                                                            </div>
                                                                            <div class="product-name">
                                                                                <a href="#">Babyhug Frock Style Top And Leggings</a>

                                                                            </div>
                                                                            <div class="product-price">
                                                                                <h4 class="pink-btn-small"> $50.00 </h4>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 col-sm-6">
                                                                    <div class="product-details">
                                                                        <div class="product-media">                                                            
                                                                            <span class="hover-image white-bg">
                                                                                <img src="assets/img/product/cat-7.png" alt="">
                                                                            </span>
                                                                            <img alt="product-img" src="assets/img/product/product3.png">
                                                                            <div class="product-new">
                                                                                <div class="green-new-tag new-tag">
                                                                                    <a href="#" class="funky-font">New</a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-overlay">
                                                                                <a href="#" class="addcart blue-background fa fa-shopping-cart"></a>                                                                
                                                                                <a href="#" class="likeitem green-background fa fa-heart"></a>
                                                                                <a class="preview pink-background fa fa-eye" href="#product-preview" data-toggle="modal"></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-content">
                                                                            <div class="rating">                                                              
                                                                                <span class="star active"></span>
                                                                                <span class="star active"></span>
                                                                                <span class="star active"></span>
                                                                                <span class="star half"></span>
                                                                                <span class="star"></span>
                                                                            </div>
                                                                            <div class="product-name">
                                                                                <a href="#">Babyhug Frock Style Top And Leggings</a>

                                                                            </div>
                                                                            <div class="product-price">
                                                                                <h4 class="pink-btn-small"> $50.00 </h4>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div> 
                                                                <div class="col-md-3 col-sm-6">
                                                                    <div class="product-details">
                                                                        <div class="product-media">                                                            
                                                                            <span class="hover-image white-bg">
                                                                                <img src="assets/img/product/cat-7.png" alt="">
                                                                            </span>
                                                                            <img alt="product-img" src="assets/img/product/product4.png">

                                                                            <div class="product-overlay">
                                                                                <a href="#" class="addcart blue-background fa fa-shopping-cart"></a>                                                                
                                                                                <a href="#" class="likeitem green-background fa fa-heart"></a>
                                                                                <a class="preview pink-background fa fa-eye" href="#product-preview" data-toggle="modal"></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-content">
                                                                            <div class="rating">                                                              
                                                                                <span class="star active"></span>
                                                                                <span class="star active"></span>
                                                                                <span class="star active"></span>
                                                                                <span class="star half"></span>
                                                                                <span class="star"></span>
                                                                            </div>
                                                                            <div class="product-name">
                                                                                <a href="#">Babyhug Frock Style Top And Leggings</a>

                                                                            </div>
                                                                            <div class="product-price">
                                                                                <h4 class="pink-btn-small"> $50.00 </h4>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>					
                                        </li>                                      
                                        <li><a href="#">Footwear</a></li>
                                        <li><a href="#">Toy & Books</a></li>
                                        <li><a href="#">Care & Feeding</a></li>
                                        <li><a href="#">Baby Gear & Nursery</a></li>
                                        <li><a href="#">Moms & Maternity</a></li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" >Gifts <span class="caret"></span></a>
                                            <ul class="dropdown-menu ">
                                                <li><a href="#">Gift for Babies </a></li>
                                                <li><a href="#">Gift for Kids</a></li>
                                                <li><a href="#">Clothes</a></li>
                                                <li><a href="#">Toys & Gaming</a></li>
                                                <li><a href="#">Accessories</a></li>
                                                <li><a href="#">Nursery</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Offers</a></li>
                                        <li><a href="shopping-cart.html">Stores</a></li>   
                                        <li class="dropdown mega-dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <span class="caret"></span></a>				
                                            <div class="dropdown-menu mega-dropdown-menu">
                                                <div class="block-bg  light-bg">
                                                    <div class="col-md-3 col-sm-6  menu-block">
                                                        <div class="sub-list">
                                                            <h2 class="title-2 sub-title-small">Product Categories</h2>
                                                            <ul>
                                                                <li> <i class="fa fa-angle-right pink-color"></i> <a href="categories-listing.html">Category Listing</a> </li>                                                                     <li> <i class="fa fa-angle-right pink-color"></i> <a href="product-grid-fullwidth.html">Category Grid View Full Width</a> </li>
                                                                <li> <i class="fa fa-angle-right pink-color"></i> <a href="product-grid-rightsidebar.html">Category Grid View Right Sidebar</a> </li>
                                                                <li> <i class="fa fa-angle-right pink-color"></i> <a href="product-grid-leftsidebar.html">Category Grid View Left Sidebar</a> </li>
                                                                <li> <i class="fa fa-angle-right pink-color"></i> <a href="product-list-fullwidth.html">Category List View Full Width</a> </li>
                                                                <li> <i class="fa fa-angle-right pink-color"></i> <a href="product-list-rightsidebar.html">Category List View Right Sidebar</a> </li>
                                                                <li> <i class="fa fa-angle-right pink-color"></i> <a href="product-list-leftsidebar.html">Category List View Left Sidebar</a> </li>                                                               
                                                            </ul>
                                                        </div>
                                                    </div> 
                                                    <div class="col-md-3 col-sm-6  menu-block">
                                                        <div class="sub-list">
                                                            <h2 class="title-2 sub-title-small">Single Product</h2>
                                                            <ul>
                                                                <li> <i class="fa fa-angle-right pink-color"></i> <a href="product-single-fullwidth.html">Single Product Full Width</a> </li>
                                                                <li> <i class="fa fa-angle-right pink-color"></i> <a href="product-single-hover.html">Single Product Hover</a> </li>
                                                                <li> <i class="fa fa-angle-right pink-color"></i> <a href="product-single-rightsidebar.html">Single Product Right Filter</a> </li>
                                                                <li> <i class="fa fa-angle-right pink-color"></i> <a href="product-single-leftsidebar.html">Single Product Left Filter</a> </li>                                                                
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-6  menu-block">
                                                        <div class="sub-list">
                                                            <h2 class="title-2 sub-title-small">Pages</h2>                                                                
                                                            <ul>
                                                                <li> <i class="fa fa-angle-right pink-color"></i> <a href="about-us.html">About Us</a> </li>
                                                                <li> <i class="fa fa-angle-right pink-color"></i> <a href="shopping-cart.html">Shopping Cart</a> </li>
                                                                <li> <i class="fa fa-angle-right pink-color"></i> <a href="check-out.html">Checkout</a> </li>                                                                                                                                       
                                                                <li> <i class="fa fa-angle-right pink-color"></i> <a href="shortcodes.html">Shortcodes</a> </li>                                                                 <li> <i class="fa fa-angle-right pink-color"></i> <a href="typography.html">Typography</a> </li>
                                                                <li> <i class="fa fa-angle-right pink-color"></i> <a href="coming-soon.html">Coming Soon</a> </li>
                                                                <li> <i class="fa fa-angle-right pink-color"></i> <a href="404.html">Error Page</a> </li> 
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-6  menu-block">
                                                        <div class="sub-list">
                                                            <h2 class="title-2 sub-title-small">My Account</h2>
                                                            <ul>
                                                                <li>  <i class="fa fa-angle-right pink-color"></i> <a href="my-account.html">My Account</a></li>                                                
                                                                <li>  <i class="fa fa-angle-right pink-color"></i> <a href="account-info.html"> Account Information </a></li>                                                
                                                                <li>  <i class="fa fa-angle-right pink-color"></i> <a href="cng-pw.html">Change Password</a></li>
                                                                <li>  <i class="fa fa-angle-right pink-color"></i> <a href="address-book.html">Address Books</a></li>
                                                                <li>  <i class="fa fa-angle-right pink-color"></i> <a href="order-history.html">Order History</a></li>
                                                                <li>  <i class="fa fa-angle-right pink-color"></i> <a href="review-rating.html">Reviews and Ratings</a></li>
                                                                <li>  <i class="fa fa-angle-right pink-color"></i> <a href="return.html">Returns Requests</a></li>
                                                                <li>  <i class="fa fa-angle-right pink-color"></i> <a href="newsletter.html">Newsletter</a></li>
                                                                <li>  <i class="fa fa-angle-right pink-color"></i> <a href="myaccount-leftsidebar.html">Left Sidebar</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>                                              
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </article>

                </section> 
            </header>
            <!-- /Header -->

            <!-- CONTENT AREA -->

            <!-- Breadcrumbs Start -->
            <section class="breadcrumb-bg margin-bottom-80">     
                <span class="gray-color-mask color-mask"></span>
                <div class="theme-container container">
                    <div class="site-breadcrumb relative-block space-75">
                        <h2 class="section-title">
                            <span>
                                <span class="funky-font blue-tag">My </span> 
                                <span class="italic-font">Account</span>
                            </span>
                        </h2>
                        <h3 class="sub-title"> Account Information </h3>
                        <hr class="dash-divider">
                        <ol class="breadcrumb breadcrumb-menubar">
                            <li><a href="#">Home</a>  >  <span class="blue-color"> My Account </span> </li>                             
                        </ol>
                    </div>  
                </div>
            </section>
            <!-- / Breadcrumbs Ends -->

            <article  class="container theme-container"> 
                <div class="row">
                    <!-- Posts Start -->
                    <aside class="col-md-8 col-sm-8 space-bottom-20">
                        <div class="title-wrap  text-center space-bottom-25">
                            <h2 class="section-title with-border">
                                <span class="white-bg">
                                    <span class="funky-font pink-tag">My</span> 
                                    <span class="italic-font">Account</span>
                                </span>
                            </h2>                                                          
                        </div>
                        <div class="account-details-wrap">
                            <div class="title-2 sub-title-small">  My Account</div>
                            <div class="account-box  light-bg default-box-shadow">
                                <ul>
                                    <li>                                                
                                        <a href="account-info.html">Edit your account information</a>
                                    </li>
                                    <li>                                               
                                        <a href="cng-pw.html">Change your password</a>
                                    </li>
                                    <li>                                              
                                        <a href="address-book.html">Modify your address book entries</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="title-2 sub-title-small"> order and review </div>
                            <div class="account-box  light-bg default-box-shadow">
                                <ul>
                                    <li>
                                        <a href="order-history.html">View your order history</a>
                                    </li>
                                    <li>
                                        <a href="review-rating.html">Your reviews and ratings</a>
                                    </li>
                                    <li>
                                        <a href="return.html">View your retun requests</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="title-2 sub-title-small">  Newsletter </div>
                            <div class="account-box  light-bg default-box-shadow">
                                <ul>
                                    <li>
                                        <a href="newsletter.html">Subscribe / unsubscribe to newsletter</a>
                                    </li>                                           
                                </ul>
                            </div>
                        </div>                                                    
                    </aside>
                    <!-- Posts Ends --> 

                    <!-- Sidebar Start -->
                    <aside class="col-md-4 col-sm-4 space-bottom-20">                        
                        <div class="blog-sidebar-widget light-bg default-box-shadow">
                            <h4 class="widget-title blue-bg"> <span>  Account  </span> </h4>
                            <div class="blog-widget-content">
                                <ul>
                                    <li  class="accout-item"><a href="account-info.html"> Account Information </a></li>
                                    <li  class="accout-item active"><a href="my-account.html">My Account</a></li>                                        
                                    <li  class="accout-item"><a href="cng-pw.html">Change Password</a></li>
                                    <li  class="accout-item"><a href="address-book.html">Address Books</a></li>
                                    <li  class="accout-item"><a href="order-history.html">Order History</a></li>
                                    <li  class="accout-item"><a href="review-rating.html">Reviews and Ratings</a></li>
                                    <li  class="accout-item"><a href="return.html">Returns Requests</a></li>
                                    <li  class="accout-item"><a href="newsletter.html">Newsletter</a></li>
                                    <li  class="accout-item"><a href="myaccount-leftsidebar.html">Left Sidebar</a></li>
                                </ul>
                            </div>
                        </div>                      
                    </aside>
                    <!-- / Sidebar Ends -->     
                </div>
            </article>


            <!-- Testimonials Slider Start -->
            <section id="testimonials-slider" class="space-top-35">
                <div class="bg2-with-mask space-35">
                    <span class="blue-color-mask color-mask"></span>
                    <div class="container theme-container">
                        <div class="testimonials-wrap space-35">
                            <div class="testimonials-slider">
                                <div class="item">
                                    <div class="row">
                                        <div class="testimonials-img col-md-1 col-sm-2">
                                            <a class="" href="#"><img  src="assets/img/partners/testimonials.png" alt=""> </a>

                                        </div>
                                        <div class="testimonials-content col-md-10 col-sm-8">
                                            <p class="italic-font">--- Mauris in nisl justo. Integer dictum dolor at tortor dictum laoreet.  ut pharetra tortor. Phasellus rhoncus, dolor ac ornare tincidunt, tortor tellus finibus risus, vitae vehicula nulla risus at magna. Nunc sodales facilisis neque, Donec et aliquamo. Fusce libero sapien, egestas quis faucibus ornare...!! :) </p>
                                            <h4>- Aditi Doe </h4>
                                            <a class="italic-font" href="#">http://themeforest.net/user/jthemes</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row">
                                        <div class="testimonials-img col-md-1 col-sm-2">
                                            <a class="" href="#"><img  src="assets/img/partners/testimonials.png" alt=""> </a>

                                        </div>
                                        <div class="testimonials-content col-md-10 col-sm-8">
                                            <p class="italic-font">--- Mauris in nisl justo. Integer dictum dolor at tortor dictum laoreet.  ut pharetra tortor. Phasellus rhoncus, dolor ac ornare tincidunt, tortor tellus finibus risus, vitae vehicula nulla risus at magna. Nunc sodales facilisis neque, Donec et aliquamo. Fusce libero sapien, egestas quis faucibus ornare...!! :) </p>
                                            <h4>- Aditi Doe </h4>
                                            <a class="italic-font" href="#">http://themeforest.net/user/jthemes</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row">
                                        <div class="testimonials-img col-md-1 col-sm-2">
                                            <a class="" href="#"><img  src="assets/img/partners/testimonials.png" alt=""> </a>

                                        </div>
                                        <div class="testimonials-content col-md-10 col-sm-8">
                                            <p class="italic-font">--- Mauris in nisl justo. Integer dictum dolor at tortor dictum laoreet.  ut pharetra tortor. Phasellus rhoncus, dolor ac ornare tincidunt, tortor tellus finibus risus, vitae vehicula nulla risus at magna. Nunc sodales facilisis neque, Donec et aliquamo. Fusce libero sapien, egestas quis faucibus ornare...!! :) </p>
                                            <h4>- Aditi Doe </h4>
                                            <a class="italic-font" href="#">http://themeforest.net/user/jthemes</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonials-slider-links">                
                                <span class="prev slider-btn"  data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                </span>
                                <span class="next slider-btn"  data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <img alt=".." class="blue-zig-zag" src="assets/img/pattern/ziz-zag.png">
            </section>
  
  <?php include VIEWS .  "/partial/footer.php"; ?>

    

        </main>




    </body>

<!-- Mirrored from event-theme.com/themes/baby-store/my-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Apr 2018 18:52:17 GMT -->
</html>