<?php include VIEWS . "/partial/header.php" ; ?>
<?php 
include_once CONTROLLERS . "/ForumManagement/ForumController.php" ; 

if(isset($_GET['p']) && $_GET['p'] > 0) {
    $current_page = $_GET['p'];
    $offset = ($_GET['p'] - 1) * BlogController::$limit;
} else {
    $current_page = 1;
    $offset = 0;
}

$limit = ForumController::$limit;
$topics = ForumController::getAllTopics($limit, $offset);

$allTopicsCount = ForumController::countAllTopics();
?>

<?php include VIEWS . '/partial/header.php'; ?>

    <body id="home" class="wide">

        <main class="wrapper"> 
            <?php include VIEWS . '/partial/menu.php'; ?>
          
            <section class="breadcrumb-bg margin-bottom-80">     
                <span class="gray-color-mask color-mask"></span>
                <div class="theme-container container">
                    <div class="site-breadcrumb relative-block space-75">
                        <h2 class="section-title">
                            <span>
                                <span class="funky-font blue-tag">Forum </span> 

                            </span>
                        </h2>
                        <h3 class="sub-title"> <?php if (AuthenticationController::$is_logged_in) {
                            echo "Welcome To our Forum: " .   AuthenticationController::getCurrentUser()->getFullName(); 
                        } else {
                            ?> Forum <?php
                        } ?>
                        </h3>
                        <hr class="dash-divider">
                        <ol class="breadcrumb breadcrumb-menubar">
                            <li><a href="#">Home</a>  >  <a href="forum">Forum</a> </li>                             
                        </ol>
                    </div>  
                </div>
            </section>
            <!-- / Breadcrumbs Ends -->

            <article  class="container theme-container"> 
                <div class="row">
                    <!-- Posts Start -->
                    <aside class="col-md-12 col-sm-12 space-bottom-45">
                        <div class="account-details-wrap">
                            <div class="title-2 sub-title-small"> ALL TOPICS </div>
                            <div class="light-bg default-box-shadow">
                                <table class="product-table">
                                    <thead>
                                        <tr>                             
                                            <th>Topics</th>                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            foreach ($topics as $topic) {
                                        ?>
                                        <tr>
                                            <td class="description">
                                                <a href="topic?id=<?= $topic->id ?>" > <?= $topic->name ?></a>    
                                                <p> <?= ForumController::countAllThreadsOfTopic($topic) ?> Threads </p>                                      
                                            </td>
                                        </tr>
                                        <?php 
                                            }
                                        ?>
                                    </tbody>                               
                                </table>
                                <div class="light-bg sorter">
                                <div class="col-md-4 col-sm-12">
                                        <div class="shp-btn">
                                            <a class="pink-btn btn" href="#"> Back To Main Menu </a>
                                        </div>                               
                                    </div>
                                    <style> 
                                        .pagination-list > li.active > a{
                                            color: white;
                                        }
                                    </style>
                                    <div class="col-md-4 col-sm-12 bottom-pagination text-center">                                                                
                                        <div class="inline-block">
                                            <div class="pagination-wrapper">
                                                <ul class="pagination-list">

                                                    <li class="prev"> 
                                                        <a <?= $current_page == 1 ? '' : 'href="?p='. (int)($current_page - 1) .'"' ?>> 
                                                            <i class="fa fa-angle-left"></i> 
                                                        </a> 
                                                    </li>
                                                
                                                    <?php
                                                        for ($i=1; $i <= ceil($allTopicsCount / $limit) ; $i++) { 
                                                    ?>
                                                        <li <?= $current_page == $i ? 'class="active"' : '' ?> > 
                                                            <a <?= $current_page == $i ? '' : 'href="?p='. $i .'"' ?> > <?= $i ?> </a>
                                                        </li>
                                                    <?php
                                                        }
                                                    ?>
                                                    <li class="nxt"> 
                                                        <a <?= 
                                                        intval($current_page) === intval(ceil($allTopicsCount / $limit)) 
                                                        ? '' : 'href="?p='. (int)($current_page + 1) .'"' ?>> 
                                                            <i class="fa fa-angle-right"></i> 
                                                        </a> 
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12 show-items">                
                                        <div class="pull-right">Showing Items : <?= $offset + 1 ?>  to <?= $offset + count($topics) ?> total <?= $allTopicsCount ?></div>
                                    </div>
                                </div>
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

              <!-- / CONTENT AREA -->
              <?php include VIEWS . '/partial/footer.php'; ?>
        </main>


    </body>

</html>