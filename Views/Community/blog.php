<?php include VIEWS . "/partial/header.php" ; ?>
<?php 
include_once CONTROLLERS . "/BlogManagement/BlogController.php" ; 

if(isset($_GET['p']) && $_GET['p'] > 0) {
    $current_page = $_GET['p'];
    $offset = ($_GET['p'] - 1) * BlogController::$limit;
} else {
    $current_page = 1;
    $offset = 0;
}
$limit = BlogController::$limit;
$posts = BlogController::getPosts($offset);
if(count($posts) == 0) {
    header('Location: ' . ERROR . 404);
}
?>

    <body id="home" class="wide">

        <!-- WRAPPER -->
        <main class="wrapper"> 
        <?php include VIEWS . "/partial/menu.php" ; ?>

            <!-- CONTENT AREA -->

            <!-- Breadcrumbs Start -->
            <section class="breadcrumb-bg margin-bottom-80">     
                <span class="gray-color-mask color-mask"></span>
                <div class="theme-container container">
                    <div class="site-breadcrumb relative-block space-75">
                        <h2 class="section-title">
                            <span>
                                <span class="funky-font blue-tag">News </span> 
                                <span class="italic-font">From Blog</span>
                            </span>
                        </h2>
                        <h3 class="sub-title"> <?php if (AuthenticationController::$is_logged_in) {
                            echo "Welcome To our blog: " .   AuthenticationController::getCurrentUser()->getFullName(); 
                        } else {
                            ?> Latest News <?php
                        } ?>
                        </h3>
                        <hr class="dash-divider">
                        <ol class="breadcrumb breadcrumb-menubar">
                            <li><a href="#">Home</a>  >  <a href="#">Blog</a>  >  <span class="blue-color"> News </span> </li>                             
                        </ol>
                    </div>  
                </div>
            </section>
            <!-- / Breadcrumbs Ends -->

            <article  class="container theme-container"> 
                <section class="blog-post-wrap">
                    <div class="row">
                        <!-- Posts Start -->
                        <aside class="col-md-8 col-sm-8">
                            <div class="blog-post-wrap space-bottom-45">
<?php
    foreach ($posts as $post) {
?>

                                <div class="blog-box">
                                    <div class="blog-media">
                                        <img src="assets/img/blog/post-2.jpg" alt="...">                      
                                        <div class="blog-new">
                                            <div class="blue-new-tag new-tag">
                                                <a class="fa fa-picture-o" href="#"></a>
                                            </div>
                                        </div>                                           
                                    </div>
                                    <div class="blog-content">
                                        <a class="post-title" href="blog-single.html">
                                        <?= $post->title ?>                                    
                                        </a>
                                        <ul class="post-meta">
                                            <li> <span class="fa fa-user green-color"></span> <a href="#">
                                            <?= BlogController::loadAuthor($post)->getFullName(); ?>

                                            </a> </li>
                                            <li> <span class="fa fa-clock-o pink-color"></span> <a href="#">
                                            <?= PrettyDateTime::parse(new DateTime($post->creation_date)); ?>
                                            </a> </li>
                                            <li> <span class="fa  fa-comment blue-color"></span> <a href="#">
                                            <?= count(BlogController::getComments($post)) ?>
                                            </a> </li>
                                            <li class="read-more" style="float: right; text-align:center">
                                                <a href="blog_post?id=<?= $post->id ?>" class="blue-btn btn" style="padding-left:20px;"> 
                                                    Read More 
                                                    <i class="fa fa-caret-right"></i> 
                                                </a>
                                            </li>
                                        </ul>
                                       
                                        <hr class="fullwidth-divider">
                                        <div class="post-detail">
                                            <!-- <p>
                                            <?= $post->content ?>
                                            </p> -->
                                        </div>
                                        
                                    </div>
                                </div>
<?php 
    } 
?>

                                <div class="light-bg sorter">
                                    <div class="col-md-6 col-sm-12 show-items">                
                                        <span>Showing Items : <?= $offset + 1 ?>  to <?= $offset + count($posts) ?> total <?= BlogController::countAllPosts(); ?></span>
                                    </div>
                                    <style> 
                                    .pagination-list > li.active > a{
                                        color: white;
                                    }
                                    </style>
                                    <div class="col-md-6 col-sm-12 bottom-pagination text-right">                                                                
                                        <div class="inline-block">
                                            <div class="pagination-wrapper">
                                                <ul class="pagination-list">

                                                    <li class="prev"> 
                                                        <a <?= $current_page == 1 ? '' : 'href="?p='. (int)($current_page - 1) .'"' ?>> 
                                                            <i class="fa fa-angle-left"></i> 
                                                        </a> 
                                                    </li>
                                                
                                                    <?php
                                                        for ($i=1; $i <= ceil(BlogController::countAllPosts() / $limit) ; $i++) { 
                                                    ?>
                                                        <li <?= $current_page == $i ? 'class="active"' : '' ?> > 
                                                            <a <?= $current_page == $i ? '' : 'href="?p='. $i .'"' ?> > <?= $i ?> </a>
                                                        </li>
                                                    <?php
                                                        }
                                                    ?>
                                                    <li class="nxt"> 
                                                        <a <?= 
                                                        intval($current_page) === intval(ceil(BlogController::countAllPosts() / $limit)) 
                                                        ? '' : 'href="?p='. (int)($current_page + 1) .'"' ?>> 
                                                            <i class="fa fa-angle-right"></i> 
                                                        </a> 
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>
                        <!-- Posts Ends -->

                        <!-- Sidebar Start -->
                        <aside class="col-md-4 col-sm-4">
                            <div class="blog-sidebar-widget light-bg default-box-shadow">
                                <h4 class="widget-title green-bg"><span> Search Widget </span></h4>
                                <div class="blog-widget-content">
                                    <form class="search-form" action="#">
                                        <label>
                                            <span class="screen-reader-text">Search for:</span>
                                            <input type="search" class="search-field" placeholder="Type Keyword" value="" name="s" title="Search for:">
                                        </label>
                                        <input type="submit" class="search-submit" value="Search">
                                    </form>
                                </div>
                            </div>
                            <div class="blog-sidebar-widget light-bg default-box-shadow">
                                <h4 class="widget-title blue-bg"> <span> Latest Post </span> </h4>
                                <div class="blog-widget-content widget-latest-post">
                                    <ul>
                                        <li>
                                            <div class="post-img">
                                                <a href="#"> <img src="assets/img/blog/blog-widget-1.png" alt="//"> </a>
                                            </div>
                                            <div class="post-info">
                                                <p>Phasellus rhoncus quis nunc tae dapibus. Integer vehicula urna  nisl ullamcorper.</p>
                                                <span class="blue-color"><i class="fa fa-clock-o"></i><strong>6 Days Ago</strong> </span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="post-img">
                                                <a href="#"> <img src="assets/img/blog/blog-widget-2.png" alt="//"> </a>
                                            </div>
                                            <div class="post-info">
                                                <p>Phasellus rhoncus quis nunc tae dapibus. Integer vehicula urna  nisl ullamcorper.</p>
                                                <span class="blue-color"><i class="fa fa-clock-o"></i><strong>6 Days Ago</strong> </span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="post-img">
                                                <a href="#"> <img src="assets/img/blog/blog-widget-3.png" alt="//"> </a>
                                            </div>
                                            <div class="post-info">
                                                <p>Phasellus rhoncus quis nunc tae dapibus. Integer vehicula urna  nisl ullamcorper.</p>
                                                <span class="blue-color"><i class="fa fa-clock-o"></i><strong>6 Days Ago</strong> </span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="blog-sidebar-widget light-bg default-box-shadow">
                                <h4 class="widget-title purple-bg"> <span> Tag Widget </span> </h4>
                                <div class="blog-widget-content tagcloud">
                                    <a href="#"> children </a>
                                    <a href="#"> baby </a>
                                    <a href="#"> wootheme </a>
                                    <a href="#"> kids </a>
                                    <a href="#"> shop </a>
                                    <a href="#"> Woo Commerce </a>
                                    <a href="#"> kidstore </a>
                                    <a href="#"> shopping </a>
                                    <a href="#"> dress </a>
                                    <a href="#"> girls </a>
                                    <a href="#"> boys </a>
                                    <a href="#"> all </a>
                                </div>
                            </div>
                            <div class="blog-sidebar-widget light-bg default-box-shadow">
                                <h4 class="widget-title golden-bg"> <span> Archives </span> </h4>
                                <div class="blog-widget-content">
                                    <ul>                                
                                        <li class="arch-item"> <a href="#">June 2015 </a> </li>
                                        <li class="arch-item"> <a href="#"> May 2015 </a> </li>
                                        <li class="arch-item"> <a href="#"> April 2015 </a> </li>
                                        <li class="arch-item"> <a href="#"> March 2015 </a> </li>
                                        <li class="arch-item"> <a href="#"> February 2015 </a> </li>
                                        <li class="arch-item"> <a href="#"> January 2015 </a> </li>                               
                                    </ul>
                                </div>
                            </div>
                      
                        </aside>
                        <!-- / Sidebar Ends -->
                    </div>
                </section>
            </article>



    <?php include VIEWS . "/partial/footer.php" ; ?>


        </main>




    </body>

</html>