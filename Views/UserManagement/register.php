<?php if (AuthenticationController::$is_logged_in ) {
    header("Location: .");
} 
unset($_SESSION["code"]);
?>
 <?php 
        if (isset($_POST["register_submit"])) {
            include_once CONTROLLERS . "/UserManagement/UserController.php" ;
            $is_register_complete = UserController::register($_POST);
            $error = "";
            if (!$is_register_complete) {
                $error = "An error occured, try later";
            }
            else {
               AuthenticationController::getInstance()->login($_POST["username"], $_POST["password"]);    
               header("Location: .");
            }
        }
        
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
                        <h3 class="sub-title"> Register for a new account </h3>
                        <hr class="dash-divider">

                    </div>  
                </div>
            </section>
            <!-- / Breadcrumbs Ends -->

            <article  class="container theme-container"> 
                <div class="row">
                    <!-- Posts Start -->
                    <aside class="col-md-12 space-bottom-20">
          
                        <div class="account-details-wrap">
                        <?php if (isset($error) && $error !="" ) { ?>
                    <div class="alert alert-danger" role="alert">
                       <?= $error ?>
                        </div>
                    <?php } ?>
                            <div class="title-2 sub-title-small">  My Account Information </div>
                            <div class="account-box  light-bg default-box-shadow">
                                <form action="" method="post" class="form-delivery">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                            <label class="form-label"> Username</label>
                                            <input type="text" name="username" class="form-control" placeholder="username" required=""></div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                            <label class="form-label"> Password</label>
                                            <input type="password"  name="password" placeholder="password" class="form-control"  required=""></div>
                                        </div>                                                                                                 
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                            <label class="form-label"> First Name</label>
                                            <input type="text" name="first_name" class="form-control"  placeholder="First Name" required=""></div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                        
                                            <div class="form-group">
                                            <label class="form-label"> Last Name</label>
                                            <input type="text" name="last_name" class="form-control"  placeholder="Last Name" required=""></div>
                                        </div>  
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                            <label class="form-label"> Email</label>
                                            <input type="email" name="email" placeholder="Email" class="form-control" required=""></div>
                                        </div>  
                                        <div class="col-md-3">
                                            <div class="form-group">
                                            <label class="form-label"> Phone</label>
                                            <input type="number" id="phone" name="phone" placeholder="Phone" class="form-control" required=""></div>
                                        </div>  
                                        <button style="margin-top:24px" id="send_verification" class="btn btn-primary col-md-3"> Send Verification </button>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                            <label class="form-label"> Verification Code</label>
                                            <input type="text" pattern="\d\d\d\d" maxlength="4" id="verification_code" placeholder="Verification Code" class="form-control" required=""></div>
                                        </div>  
                                        <button style="margin-top:24px; display:none" id="verify_button" class="btn btn-success col-md-3"> Verify Code </button>
                                        <div style="display:none" id="register_submit" class="col-md-12 col-sm-12 test-right">
                                            <label class="pink-btn btn">
                                                <input type="submit" value="Register" name="register_submit" >
                                            </label>                                            
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>                                                    
                    </aside>
                    <!-- Posts Ends --> 

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