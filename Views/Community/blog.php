<?php include VIEWS . "/partial/header.php" ; ?>
<?php 
include_once CONTROLLERS . "/BlogManagement/BlogController.php" ; 

$most_used_tags = BlogController::getMostUsedTags();

if(isset($_GET['p']) && $_GET['p'] > 0) {
    $current_page = $_GET['p'];
    $offset = ($_GET['p'] - 1) * BlogController::$limit;
} else {
    $current_page = 1;
    $offset = 0;
}
$limit = BlogController::$limit;


if(isset($_GET['tag']) && !empty($_GET['tag'])) {
    // try {
        $postsToShowCount = BlogController::getPostsByTagCount($_GET['tag']);
        $posts = BlogController::getPostsByTag($_GET['tag'], $offset);
    // } catch(Exception $e) {
    //     header('Location: ' . ERROR . 404);
    // }
} 
else if(isset($_GET['search']) && !empty($_GET['search'])) {
    $postsToShowCount = BlogController::searchPostsCount($_GET['search']);
    $posts = BlogController::searchPosts($_GET['search'], $offset);
    if(count($posts) == 0) {
        // TO DO CHANGE IT TO A MESSAGE
        header('Location: ' . ERROR . 404);
    }
} else {
    $postsToShowCount = BlogController::countAllPosts();
    $posts = BlogController::getPosts($offset);
    if(count($posts) == 0) {
        header('Location: ' . ERROR . 404);
    }
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
                                        <a class="post-title" href="blog_post?id=<?= $post->id ?>">
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
                                        </div>
                                        
                                    </div>
                                </div>
<?php 
    } 
?>

                                <div class="light-bg sorter">
                                    <div class="col-md-6 col-sm-12 show-items">                
                                        <span>Showing Items : <?= $offset + 1 ?>  to <?= $offset + count($posts) ?> total <?= $postsToShowCount ?></span>
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
                                                        for ($i=1; $i <= ceil($postsToShowCount / $limit) ; $i++) { 
                                                    ?>
                                                        <li <?= $current_page == $i ? 'class="active"' : '' ?> > 
                                                            <a <?= $current_page == $i ? '' : 'href="?p='. $i .'"' ?> > <?= $i ?> </a>
                                                        </li>
                                                    <?php
                                                        }
                                                    ?>
                                                    <li class="nxt"> 
                                                        <a <?= 
                                                        intval($current_page) === intval(ceil($postsToShowCount / $limit)) 
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
                                <h4 class="widget-title green-bg"><span> Search </span></h4>
                                <div class="blog-widget-content">
                                    <form class="search-form" action="blog">
                                        <label>
                                            <span class="screen-reader-text">Search for:</span>
                                            <input type="search" class="search-field" placeholder="Type Keyword" value="" name="search" title="Search for:">
                                        </label>
                                        <input type="submit" class="search-submit" value="Search">
                                    </form>
                                </div>
                            </div>
                            
                            <div class="blog-sidebar-widget light-bg default-box-shadow">
                                <h4 class="widget-title purple-bg"> <span> Tags </span> </h4>
                                <div class="blog-widget-content tagcloud">
                                    <?php 
                                        foreach ($most_used_tags as $tag) {
                                    ?>
                                    <a href="?tag=<?= $tag->id ?>"> <?= $tag->name ?> </a>
                                    <?php 
                                        }
                                    ?>
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