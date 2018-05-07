<?php include_once CONTROLLERS . "/StoreManagement/ProductController.php";
        include_once CONTROLLERS . "/BlogManagement/BlogController.php";

    $products = ProductController::getAllProducts();
    $posts = BlogController::getPosts();
?>

<?php include VIEWS . "/partial/header.php"?>
    <body id="home" class="wide">
        <!-- PRELOADER -->
        <div id="preloader">
            <div class='baby'>
                <div class='head'>
                    <div class='eye'></div>
                    <div class='cheek'></div>
                    <div class='horn'></div>
                </div>
                <div class='back'>
                    <div class='tail'></div>
                    <div class='hand'></div>
                    <div class='feet'></div>
                    <div class='ass'></div>
                </div>
            </div>
        </div>
        <main class="wrapper"> 
<?php include VIEWS . "/partial/menu.php" ?>
            <section id="main-slider" class="carousel slide main-slider style-1 light-bg" >   
                <div class="carousel-inner slider">
                    <div class="item active">  
                        <img src="assets/img/slider/slide-1.png" alt=" ">                       
                        <div class="theme-container container">                            
                            <div class="caption-text">
                                <div class="title-wrap">
                                    <h2 class="section-title">
                                        <span >
                                            <span class="funky-font blue-tag">Online </span> 
                                            <span class="italic-font">Shopping Store </span>
                                        </span>
                                    </h2>
                                </div>
                                <div class="discount-wrap">
                                    <h2 class="discount pink-color">Flat <span> 20% </span> off</h2>
                                    <ul class="discount-list">
                                        <li> <a href="#">Apparel</a> </li>
                                        <li> <a href="#">Toys</a> </li>
                                        <li> <a href="#">Baby Gear</a> </li>
                                        <li> <a href="#">More</a> </li>
                                    </ul>
                                    <hr class="dash-divider">
                                </div>
                                <div class="slider-link">
                                    <a class="blue-btn btn" href="#"> <i class="fa  fa-th-large"></i> Discover </a>
                                    <a class="pink-btn btn" href="#"> Shop Now! <i class="fa fa-caret-right"></i> </a>
                                </div>
                            </div>                        
                        </div>
                    </div>     
                    <div class="item">  
                        <img src="assets/img/slider/slide-1.png" alt=" ">                       
                        <div class="theme-container container">                            
                            <div class="caption-text">
                                <div class="title-wrap">
                                    <h2 class="section-title">
                                        <span >
                                            <span class="funky-font blue-tag">Online </span> 
                                            <span class="italic-font">Shopping Store </span>
                                        </span>
                                    </h2>
                                </div>
                                <div class="discount-wrap">
                                    <h2 class="discount pink-color">Flat <span> 20% </span> off</h2>
                                    <ul class="discount-list">
                                        <li> <a href="#">Apparel</a> </li>
                                        <li> <a href="#">Toys</a> </li>
                                        <li> <a href="#">Baby Gear</a> </li>
                                        <li> <a href="#">More</a> </li>
                                    </ul>
                                    <hr class="dash-divider">
                                </div>
                                <div class="slider-link">
                                    <a class="blue-btn btn" href="#"> <i class="fa  fa-th-large"></i> Discover </a>
                                    <a class="pink-btn btn" href="#"> Shop Now! <i class="fa fa-caret-right"></i> </a>
                                </div>
                            </div>                        
                        </div>
                    </div>     
                </div>
                <!--Carousel Slide Button Start-->
                <div class="slider-pagination">                        
                    <a class="left carousel-control slider-btn" href="#main-slider" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="right carousel-control slider-btn" href="#main-slider" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>            
            </section>
            <!-- / Main Slider Ends -->   

  
</br>
</br>
</br>
</br>
</br>

     <!-- Related Products Start -->
     <section id="product-tabination-1" class="space-bottom-45">
                    <div class="container theme-container">
                        <div class="title-wrap with-border space-25">
                            <h2 class="section-title with-border">
                                <span class="white-bg">
                                    <span class="funky-font blue-tag"></span> 
                                    <span class="italic-font">Our Product</span>
                                </span>
                            </h2>  
                            <h3 class="sub-title">Newest Items</h3>
                            <hr class="dash-divider">                       
                        </div>     
                        <div class="light-bg product-tabination">
                            <div class="tabination">
                                <div class="product-tabs" role="tabpanel">
                                    <!-- Nav tabs -->
                                    <ul role="tablist" class="nav nav-tabs navtab-horizontal">
                                        <li role="presentation" class="active">
                                            <a class="pink-background" data-toggle="tab" role="tab"  href="#related-product" aria-expanded="true">Latest Products</a>
                                        </li>       
                                        <li class="float-right" role="presentation">
                                        <a class="title-link" href="store"> See More <i class="fa fa-caret-right"></i> </a>
                                    </li>               
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content">                                       
                                        <!-- ====================== Related Products ======================== -->
                                        <div id="related-product" class="tab-pane fade active in" role="tabpanel">
                                            <div class="col-md-12 product-wrap default-box-shadow">
                                                <div class="title-wrap">
                                                    <h2 class="section-title">
                                                        <span>
                                                            <span class="funky-font blue-tag">Latest </span> 
                                                            <span class="italic-font">Products</span>
                                                        </span>
                                                    </h2>  
                                                    <div class="poroduct-pagination">
                                                        <span class="product-slide blue-background next"> <i class="fa fa-chevron-left"></i> </span>
                                                        <span class="product-slide blue-background prev"> <i class="fa fa-chevron-right"></i> </span>
                                                    </div>
                                                </div>  
                                                <div class="product-slider owl-carousel owl-theme">        
                                                <?php $i = 0; foreach($products as $p) { if($i> 10) break; 
                                                    $i++;?>                                      
                                                    <div class="item">
                                                        <div class="product-details">
                                                            <div class="product-media">    
                                                                <span class="hover-image white-bg">
                                                                    <img src="<?= DATA_URL . $p->image ?>" alt="">
                                                                </span>
                                                                <img src="<?= DATA_URL . $p->image ?>" alt="product-img">                                                            
                                                                <div class="product-overlay">
                                                                    <a onclick="addToCart(<?= $product->id ?>) ;return;" class="addcart blue-background fa fa-shopping-cart" href="#"></a>                                                                
                                                                    <a class="preview pink-background fa fa-eye" href="product?id=<?= $p->id ?>" > </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-content">
                                                   
                                                                <div class="product-name">
                                                                    <p><a href="product?id=<?= $p->id ?> "><?= $p->name ?></a></p>

                                                                </div>
                                                                <div class="product-price">
                                                                    <h4 class="pink-btn-small"> <?= $p->unit_price ?> DT HT </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>            
                </section>
                <!-- / Related Products Ends -->



            <!-- Newsletter Start -->
            <section id="news-letter" class="space-35">
                <div class="bg3-with-mask  space-top-35  news-letter">
                    <span class="black-mask color-mask"></span>
                    <div class="container theme-container">
                        <div class="row">
                    
                            <div class="col-md-3 col-sm-3 space-35">
                                <div class="title-wrap"> 
                                    <h2 class="section-title">
                                        <i class="fa fa-truck green-color"></i>
                                        <span>
                                            <span class="funky-font green-tag">Free </span> 
                                            <span class="italic-font">Shipping</span>
                                        </span>
                                    </h2> 
                                </div>

                                <div class="text-widget">
                                    <p>For standard oders over 100 USD. disse lobortis vestibulum eros sit amet  rper donec mollis.</p>
                                    <a href="#" class="green-color title-link"> Read More <i class="fa fa-caret-right"></i> </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 space-35">
                                <div class="title-wrap"> 
                                    <h2 class="section-title">
                                        <i class="fa fa-reply pink-color"></i>
                                        <span>
                                            <span class="funky-font pink-tag">free </span> 
                                            <span class="italic-font">Returns</span>
                                        </span>
                                    </h2> 
                                </div>
                                <div class="text-widget">
                                    <p>For standard oders over in 30 dsys. disse lobortis vestibulum eros sit amet  rper donec mollis.</p>
                                    <a href="#" class="pink-color title-link"> Read More <i class="fa fa-caret-right"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>              
            </section>
            <!-- / Newsletter Ends -->






            <!-- Blog Start -->
            <section id="home-blog" class="space-35">
                <div class="light-bg space-35">
                    <div class="container theme-container">
                        <div class="blog-wrap space-top-35">
                            <div class="title-wrap with-border">
                                <h2 class="section-title with-border">
                                    <span class="light-bg">
                                        <span class="funky-font blue-tag">News</span> 
                                        <span class="italic-font">From Blogs</span>
                                    </span>
                                </h2>  
                                <h3 class="sub-title">Latest News About Store</h3>
                                <hr class="dash-divider">                       
                            </div>
                            <div class="row">
                            <?php $i=0 ; foreach($posts as $post) {   if($i >= 3) break;?>
                                <div class="col-md-4 col-sm-6">
                                    <div class="post-wrap">
                                        <div class="post-media">                                                                                                                                                          
                                            <img src="<?= DATA_URL . $post->image_path ?>" alt=" ">
                                            <div class="blog-new">
                                                <div class="green-new-tag new-tag">
                                                    <a href="#" class="fa  fa-picture-o"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg2-with-mask green-box-shadow">
                                            <span class="green-color-mask color-mask"></span>    
                                            <div class="post-content">
                                                <a href="blog-single.html" class="post-title"><?= $post->title ?>t</a>
                                                <ul class="post-meta">
                                                    <li> <span class="fa fa-user"></span> <a >    <?= BlogController::loadAuthor($post)->getFullName(); ?></a> </li>
                                                    <li> <span class="fa fa-clock-o"></span> <a ><?= PrettyDateTime::parse(new DateTime($post->creation_date)); ?></a> </li>
                                                    <li> <span class="fa  fa-comment"></span> <a href="#"> <?= count(BlogController::getComments($post)) ?></a> </li>
                                                </ul>
                                              
                                                <div class="read-more">
                                                    <a class="title-link" href="blog_post?id=<?= $post->id ?>"> Read More <i class="fa fa-caret-right"></i> </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                                <?php $i++; } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- / Blog Ends -->


    


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
                                            <a class="" href="#"><img  src="assets/img/partners/testimonials.png" alt=" "> </a>
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
                                            <a class="" href="#"><img  src="assets/img/partners/testimonials.png" alt=" "> </a>

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
                                            <a class="" href="#"><img  src="assets/img/partners/testimonials.png" alt=" "> </a>

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
                <img  class="blue-zig-zag" src="assets/img/pattern/ziz-zag.png" alt=" ">
            </section>
            <!-- / Testimonials Slider Ends -->

            <!-- / CONTENT AREA -->
<?php include VIEWS . "/partial/footer.php" ?>
            <div id="to-top" class="to-top"><i class="fa fa-angle-up"></i></div>
        </main>


    </body>

</html>