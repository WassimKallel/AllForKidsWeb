<?php include VIEWS . "/partial/header.php" ; ?>
<?php 
include_once CONTROLLERS . "/ForumManagement/ForumController.php" ; 
// try {
    $thread_id = $_GET['id'];
    $thread = ForumController::getThreadByID($thread_id);
    if(isset($_POST) && !empty($_POST['post-content'])) {
        ForumController::saveThreadPost($thread, $_POST);
    }
    $posts = ForumController::getThreadPosts($thread);
    $currentTopic = ForumController::getThreadTopic($thread);
// } catch(Exception $e) {

// } 

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
                            ?> Latest News <?php
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
                                            <th>Post</th>                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            foreach ($posts as $post) {
                                        ?>
                                        <tr>
                                            <td class="image">
                                                <div class="white-bg cart-img">
                                                    <a class="media-link" href="#">
                                                        <img src="assets/img/cart/cart-1.png" alt="">
                                                        
                                                    </a> 
                                                </div>
                                                <div style="text-align: center;">
                                                    <?= ForumController::getPostAuthor($post)->first_name; ?>
                                                </div>
                                            </td>
                                            <td class="description">
                                                <p> <?= $post->content ?></p>                                          
                                            </td>
                                        </tr>
                                        <?php 
                                            }
                                        ?>
                                        <tr>
                                            <td class="image" style="width: 120px;">
                                                <div class="white-bg cart-img">
                                                    <a class="media-link" href="#"><img src="assets/img/cart/cart-1.png" alt=""></a> 
                                                </div>
                                            </td>
                                            <td class="description">
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
                                    </tbody>                               
                                </table>
                                <div class="continue-shopping">
                                    <div class="shp-btn">
                                        <a class="pink-btn btn" href="topic?id=<?= $currentTopic->id ?>"> Back To <?= $currentTopic->name ?> </a>
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