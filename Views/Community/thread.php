<?php include VIEWS . "/partial/header.php" ; ?>
<?php 
include_once CONTROLLERS . "/ForumManagement/ForumController.php" ; 

$limit = ForumController::$limit;
if(isset($_GET['p']) && $_GET['p'] > 0) {
    $current_page = $_GET['p'];
    $offset = ($_GET['p'] - 1) * $limit;
} else {
    $current_page = 1;
    $offset = 0;
}

$thread_id = $_GET['id'];
$thread = ForumController::getThreadByID($thread_id);
if(isset($_POST) && !empty($_POST['post-content'])) {
    ForumController::saveThreadPost($thread, $_POST);
}

$posts = ForumController::getThreadPosts($thread, $limit, $offset);
$allPostsCount = ForumController::countAllPostsOfThread($thread);
$currentTopic = ForumController::getThreadTopic($thread);
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
                            <li><a href="#">Home</a>  >  <a href="forum">Forum</a>  >  <span class="blue-color"> <?= $currentTopic->name  ?> </span> </li>                             
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
                            <div class="title-2 sub-title-small">  <?= $thread->title ?> </div>
                            <div class="light-bg default-box-shadow">
                                <table class="product-table">
                                    <thead>
                                        <tr>
                                            <th>User</th>                                
                                            <th colspan="2">Post</th>                                   
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            foreach ($posts as $post) {
                                        ?>
                                        <tr>
                                            <td class="post-avatar">
                                                <div class="white-bg cart-img">
                                                    <a class="media-link" href="#">
                                                        <img src="<?= DATA_URL . ForumController::getPostAuthor($post)->avatar_path ?>" alt="">
                                                    </a> 
                                                </div>
                                                <div style="text-align: center;">
                                                <p class="forum-user-name">
                                                    <?= ForumController::getPostAuthor($post)->getFullName(); ?>
                                                </p>    
                                                    <p class="forum-role">
                                                        <?= ForumController::getPostAuthor($post)->getRole(); ?>
                                                    </p>
                                                </div>
                                                <div class="shp-btn">
                                                    <a id="report-<?= $post->id ?>" 
                                                        <?= ForumController::isPostReportedbyConnectedUser($post) ? 'disabled' : 'onclick="report('. $post->id .')"' ?> 
                                                        class="pink-btn btn"> Report </a>
                                                </div>      
                                            </td>
                                            <td class="description">
                                                <p> <?= ($post->reported) == 0 ? $post->content : 'Post reported for innapropriate content' ?></p>   
                                                <div class="forum-post-meta" >
                                                    <p><?= PrettyDateTime::parse(new DateTime($post->creation_date)) ?></p>      
                                                </div>                                       
                                            </td>
                                            <td class="vote">
                                                <a id="upvote-<?= $post->id ?>" <?= ForumController::user_voted($post) ?  'disabled' :  'onclick="upvote('. $post->id .')"' ?> > <i class="fa fa-caret-up"></i></a>
                                                <p></p>
                                                <p id="score-<?= $post->id ?>"><?= ForumController::count_score($post) ?></p>
                                                <a id="downvote-<?= $post->id ?>" <?= ForumController::user_voted($post) ?  'disabled' :  'onclick="downvote('. $post->id .')"' ?> > <i class="fa fa-caret-down"></i></a>
                                            </td>
                                        </tr>
                                        <?php 
                                            } 
                                        ?>
                                        
                                        <?php
                                        if (AuthenticationController::$is_logged_in) { ?>
                                        <tr>
                                            <td class="post-avatar">
                                                <div class="white-bg cart-img">
                                                    <a class="media-link" href="#"><img src="<?=  DATA_URL . AuthenticationController::getCurrentUser()->avatar_path  ?>" alt=""></a> 
                                                </div>
                                                <div style="text-align: center;">
                                                <p class="forum-user-name">
                                                    <?= AuthenticationController::getCurrentUser()->getFullName();  ?>
                                                </p>    
                                                    <p class="forum-role">
                                                        <?= AuthenticationController::getCurrentUser()->getRole(); ?>
                                                    </p>
                                                </div>
                                            </td>
                                            <td class="description">
                                                <h4>Reply</h4>
                                                <form method="post" action="thread?id=<?= $_GET['id'] ?>" id="post_form" accept-charset="UTF-8" class="comment-form"><input type="hidden" name="form_type" value="new_comment" /><input type="hidden" name="utf8" value="✓" />
                                                    <p class="comment-form-comment">
                                                        <textarea  rows="5" cols="60" name="post-content" class="" id="PostBody" placeholder="Post Text"></textarea>
                                                    </p>
                                                    
                                                    <div class="form-submit col-md-12">
                                                        <button class="blue-btn btn pull-right" type="Submit">Post</button>                                           
                                                    </div>				
                                                </form>                                             
                                            </td>
                                        </tr>
                                        <?php 
                                            } else {
                                        ?>
                                        <tr>
                                            <td class="description" colspan="3">
                                                <h5>You need to <a href="#login-register" data-toggle="modal">Register/Login</a> in order to add a post</h5>    
                                                                                  
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
                                            <a class="pink-btn btn" href="topic?id=<?= $currentTopic->id ?>"> Back To <?= $currentTopic->name ?> </a>
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
                                                        for ($i=1; $i <= ceil($allPostsCount / $limit) ; $i++) { 
                                                    ?>
                                                        <li <?= $current_page == $i ? 'class="active"' : '' ?> > 
                                                            <a <?= $current_page == $i ? '' : 'href="?id='. $thread_id .'&p='. $i .'"' ?> > <?= $i ?> </a>
                                                        </li>
                                                    <?php
                                                        }
                                                    ?>
                                                    <li class="nxt"> 
                                                        <a <?= 
                                                        intval($current_page) === intval(ceil($allPostsCount / $limit)) 
                                                        ? '' : 'href="?p='. (int)($current_page + 1) .'"' ?>> 
                                                            <i class="fa fa-angle-right"></i> 
                                                        </a> 
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12 show-items">                
                                        <div class="pull-right">Showing Items : <?= $offset + 1 ?>  to <?= $offset + count($posts) ?> total <?= $allPostsCount ?></div>
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

    <script>
        function upvote(postID) {
            $.post( 'vote' , {"post_id" : postID, "vote": 1});
            $('#score-'+postID).text(parseInt($('#score-'+postID).text()) + 1);
            $('#upvote-'+postID).removeAttr("onclick");
            $('#downvote-'+postID).removeAttr("onclick");
            $('#upvote-'+postID).attr("disabled", true);
            $('#downvote-'+postID).attr("disabled", true);
        }

        function downvote(postID) {
            $.post( 'vote' , {"post_id" : postID, "vote": -1});
            $('#score-'+postID).text(parseInt($('#score-'+postID).text()) - 1);
            $('#upvote-'+postID).removeAttr("onclick");
            $('#downvote-'+postID).removeAttr("onclick");
            $('#upvote-'+postID).attr("disabled", true);
            $('#downvote-'+postID).attr("disabled", true);
        }

        function report(postID) {
            $.post( 'report' , {"post_id" : postID});
            $('#report-'+postID).attr("disabled", true);
            $('#report-'+postID).removeAttr("onclick");
        }
    </script>

    </body>
</html>