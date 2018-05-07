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
                                        <a href="account_information">Edit your account information</a>
                                    </li>
                                
                    
                                </ul>
                            </div>

                            <div class="title-2 sub-title-small"> order and review </div>
                            <div class="account-box  light-bg default-box-shadow">
                                <ul>
                                    <li>
                                        <a href="order_history">View your order history</a>
                                    </li>
                         
                                </ul>
                            </div>

                
                        </div>                                                    
                    </aside>
              
           
     </article>
  <?php include VIEWS .  "/partial/footer.php"; ?>

    

        </main>




    </body>

<!-- Mirrored from event-theme.com/themes/baby-store/my-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Apr 2018 18:52:17 GMT -->
</html>