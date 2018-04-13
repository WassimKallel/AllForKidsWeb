
<?php include VIEWS  . "/partial/header.php" ?>

<?php
    use Handlers\ErrorHandler;
    if (isset($_GET["error"])) {
        $error = ErrorHandler::getErrorCode($_GET["error"]);
    }else {
        $error = ErrorHandler::getErrorCode("404");
    }
    // All logic Goes here 
    // after this section only echos and includes are allowed
?>
    <body id="home" class="wide">
        <main class="wrapper"> 

            <!-- CONTENT AREA -->
<?php include VIEWS . "/partial/menu.php" ?>
            <!-- Breadcrumbs Start -->

            <section class="breadcrumb-bg">     
                <span class="gray-color-mask color-mask"></span>
                <div class="theme-container container">
                    <div class="site-breadcrumb relative-block space-75">
                        <h2 class="section-title">
                            <span>
                                <span class="funky-font blue-tag">Error</span> 
                                <span class="italic-font"><?= $error["Code"] ?> </span>
                            </span>
                        </h2>
                        <h3 class="sub-title"> <?= $error["Title"] ?> </h3>
                        <hr class="dash-divider">
                 
                    </div>  
                </div>
            </section>
            <!-- / Breadcrumbs Ends -->

            <!-- 404 Error  Start -->
            <section id="error-page" class="error-wrap light-bg space-80"> 
                <div class="theme-container container">                 
                    <div class="row space-40">
                        <div class="col-md-6 col-sm-5 text-right">
                            <h1 class="error-title funky-font">
                                <span class="blue-color">o</span><span class="pink-color">0</span><span class="green-color">p</span><span class="golden-color">s</span><span class="purple-color">!</span>
                            </h1>
                        </div>
                        <div class="col-md-6 col-sm-7 error-info">
                            <div class="title-wrap">

                                <h3 class="sub-title"> <?= $error["Code"] ?> Error :<span class="blue-color">  <?= $error["Title"] ?> </span></h3>
                                <hr class="dash-divider">
                            </div>                        
                            <div class="error-details">
                                <p>
                                    
                                <?= $error["Message"] ?>
                                
                                </p>
                                <a class="blue-btn btn" href="#"><i class="fa fa-caret-left"></i> Go Back To Home</a>
                            </div> 
                        </div>
                    </div>
                </div>
            </section>
            <!-- / 404 Error  Ends -->    

            <!-- / CONTENT AREA -->



        </main>
        <!-- /WRAPPER -->

<?php include VIEWS . "/partial/footer.php" ?>

    </body>

</html>