

<?php
    if (isset($_POST["username"]) &&  isset($_POST["password"]) && isset($_POST["submit"]) ) {
        $_AuthenticationController = new AuthenticationController();
        $is_valid_login = $_AuthenticationController->login($_POST["username"], $_POST["password"]); 
        if ($is_valid_login) {
            var_dump($is_valid_login);
            AuthenticationController::$current_user = User::retrieveByField("username",$POST["username"]);
            AuthenticationController::$is_logged_in = True;
        } else {
            header("Location: login?login_error=403");
        }
    }
    
?>
<?php 
    if (!$GLOBALS["AuthController"]::$is_logged_in) {
        if (isset($_GET["login_error"])) {
            $error = "Your Password/Email Combination is wrong, Please try again"; 
        }
    }
    else {
        header("Location: .");
    }
?>
<?php include VIEWS . "/partial/header.php" ?>

    <body id="home" class="wide">
        <!-- WRAPPER -->
        <main class="wrapper"> 
    <?php include VIEWS ."/partial/menu.php" ?>


            <!-- Breadcrumbs Start -->
            <section class="breadcrumb-bg margin-bottom-80">     
                <span class="gray-color-mask color-mask"></span>
                <div class="theme-container container">
                    <div class="site-breadcrumb relative-block space-75">

                        <h3 class="sub-title"> Login to your account </h3>
                        <hr class="dash-divider">

                    </div>  
                </div>
            </section>
            <!-- / Breadcrumbs Ends -->

            <article  class="container theme-container"> 
                <div class="row">
                    <!-- Posts Start -->
                    <aside class="col-md-12 col-sm-8 space-bottom-20">
                    <?php if (isset($error)) { ?>
                    <div class="alert alert-danger" role="alert">
                       <?= $error ?>
                        </div>
                    <?php } ?>
                        <div class="account-details-wrap">
                            <div class="title-2 sub-title-small">  Login </div>
                            <div class="account-box  light-bg default-box-shadow">
                                <form action="" method="post" class="form-delivery">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group"><input type="text" class="form-control" name="username" placeholder="username" required="required"></div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group"><input  name="password" type="password" class="form-control" placeholder="password"  required="required"></div>
                                        </div>                                                                                                 
                                        <div class="col-md-12 col-sm-12">
                                            <label class="pink-btn btn">
                                                <input type="submit" value="Login" name="submit">
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