<?php
    AuthenticationController::restricted();
    $user = AuthenticationController::getCurrentUser();
 ?>
<?php include VIEWS . "/partial/header.php" ?>
    <body id="home" class="wide">

        <!-- WRAPPER -->
        <main class="wrapper"> 
    <?php include VIEWS ."/partial/menu.php" ?>

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
                                    <span class="funky-font pink-tag">Account</span> 
                                    <span class="italic-font">Information</span>
                                </span>
                            </h2>                                                          
                        </div>
                        <div class="account-details-wrap">
                            <div class="title-2 sub-title-small">  My Account Information </div>
                            <div class="account-box  light-bg default-box-shadow">
                                <form action="#" class="form-delivery">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                            <label class="form-label"> Username</label>
                                            <input type="text" name="username" class="form-control" value="<?= $user->username ?>" required=""></div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                            <label class="form-label"> Password</label>
                                            <input type="password"  name="password" placeholder="password" class="form-control"  required=""></div>
                                        </div>                                                                                                 
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                            <label class="form-label"> First Name</label>
                                            <input type="text" name="first_name" class="form-control" value="<?= $user->first_name ?>" placeholder="Email" required=""></div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                        
                                            <div class="form-group">
                                            <label class="form-label"> Last Name</label>
                                            <input type="text" name="last_name" class="form-control" value="<?= $user->last_name ?>" placeholder="Phone Number" required=""></div>
                                        </div>  
                                        <div class="col-md-6 col-sm-6">
                                        
                                            <div class="form-group">
                                            <label class="form-label"> Email</label>
                                            <input type="email" name="email" class="form-control" value="<?= $user->email ?>" required=""></div>
                                        </div>  
                                        <div class="col-md-12 col-sm-12">
                                            <label class="pink-btn btn">
                                                <input type="submit" value="Update" name="submit" >
                                            </label>                                            
                                        </div>
                                    </div>
                                </form>
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

  <?php include VIEWS .  "/partial/footer.php" ; ?>
    

        </main>




    </body>

</html>