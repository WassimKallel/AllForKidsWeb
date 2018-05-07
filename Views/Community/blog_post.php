<?php include VIEWS . "/partial/header.php" ; ?>
<?php 
include_once CONTROLLERS . "/BlogManagement/BlogController.php" ; 

try {
  $post = BlogController::getPost($_GET['id']);
} catch(exception $e) {
  header('Location: ' . ERROR . 404);
}

if(!empty($_POST)) {
  BlogController::saveComment($_POST, $post);
}

$comments = BlogController::getComments($post);
?>


<?php include VIEWS . '/partial/header.php'; ?>
    <body id="home" class="wide">

    <main class="wrapper"> 
        <?php include VIEWS . '/partial/menu.php'; ?>
    <!-- CONTENT AREA -->
    <div id="shopify-section-article-template" class="shopify-section">

<!-- Breadcrumbs Start -->
<section class="breadcrumb-bg margin-bottom-80" style="background-image: url('//cdn.shopify.com/s/files/1/1608/0949/files/bg-3.jpg?v=1479978006'); background-size: cover;">     
  <span class="gray-color-mask color-mask"></span>
  <div class="theme-container container">
    <div class="site-breadcrumb relative-block space-75">
      <h2 class="section-title">
        <span>
          <span class="funky-font blue-tag">News </span> 
          <span class="italic-font">From Blog</span>
        </span>
      </h2>
      <h3 class="sub-title"> <?= $post->title ?></h3>
      <hr class="dash-divider">
    </div>  
  </div>
</section>
<!-- / Breadcrumbs Ends -->


<article  class="container theme-container"> 
  <section class="blog-post-wrap">                    
    <div class="row">
      
      
      <!-- Posts Start -->
      
      <aside class="col-md-12 space-bottom-45">
      
      
        <div class="blog-single-post-wrap">
          <div class="blog-box">
            <div class="blog-media">
              
              
              <img src="<?= $post->getImage() ?>" />
              
            </div>
            <div class="blog-content">
              <a class="post-title" href="/blogs/news/standard-blog-post-1"><?php $post->title ?></a>
              <ul class="post-meta">
                <li> <span class="fa fa-user green-color"></span> <?= BlogController::loadAuthor($post)->getFullName(); ?> </li>
                <li> <span class="fa fa-clock-o pink-color"></span> <?= PrettyDateTime::parse(new DateTime($post->creation_date)); ?> </li>
                <li> <span class="fa  fa-comment blue-color"></span> <?= 
                (count(BlogController::getComments($post)) == 1) 
                        ? '1 Comment'
                        : count(BlogController::getComments($post)) . ' Comments' ;
                 ?> </li>
              </ul>
              <hr class="fullwidth-divider">
              <div class="post-detail">
                <p>
                    <?= $post->content ?>
                </p>
              </div>    
              
              
            </div>
          </div>   
        </div>
        <div class="comments-article">
          <div class="clearfix"></div> 
          <div class="article-title" id="comments">
            <div class="article-title">
              <h2> 
                <span class="funky-font blue-tag">Comments</span>                                   
              </h2>
            </div>
            <?php 
                foreach ($comments as $comment) {
            ?>    
                <div>
                    <p> <?= $comment->content ?></p>
                    <ul class="post-meta">
                        <li> <span class="fa fa-user green-color"></span> <?= BlogController::loadCommentAuthor($comment)->getFullName(); ?> </li>
                        <li> <span class="fa fa-clock-o pink-color"></span> <?= PrettyDateTime::parse(new DateTime($comment->creation_date)); ?> </li>
                    </ul>
                    <hr class="fullwidth-divider">
                </div>
            <?php
                }
            ?>
            <form method="post" action="blog_post?id=<?= $_GET['id'] ?>" id="comment_form" accept-charset="UTF-8" class="comment-form"><input type="hidden" name="form_type" value="new_comment" /><input type="hidden" name="utf8" value="✓" />
                <div class="comment-respond" id="respond">
                <h3 class="comment-reply-title" id="reply-title">
                    <span class="italic-font">Leave a comment</span>
                </h3>
                
                <div class="comment-form row">

                    <div class="col-md-12">   
                    <p class="comment-form-comment">
                        <label>Message</label> 
                        <textarea  rows="5" cols="45" name="comment" class="" id="CommentBody" placeholder="Comment Text"></textarea>
                    </p>
                    </div>
                    
                    <div class="form-submit col-md-12">
                    <button class="blue-btn btn" type="Submit">Post comment</button>                                           
                    <input type="hidden" id="comment_post_ID" value="17" name="comment_post_ID">
                    <input type="hidden" value="0" id="comment_parent" name="comment_parent">
                    </div>					
                </div>
                </div><!-- #respond -->
                </form>

          </div>
        </div>
      </aside>
      <!-- Posts Ends -->  
      
    </div>
  </section>
</article>

</div>
            <!-- / CONTENT AREA -->
        <?php include VIEWS . '/partial/footer.php'; ?>
        </main>


    </body>

</html>