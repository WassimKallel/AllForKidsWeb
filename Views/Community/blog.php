<?php include VIEWS . "/partial/header.php" ; ?>

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
                                <div class="blog-box">
                                    <div class="blog-media">
                                        <!-- Main Slider Start -->
                                        <section  id="main-slider"  class="carousel slide main-slider light-bg">
                                            <div class="carousel-inner slider">
                                                <div class="item">  
                                                    <img src="assets/img/slider/about-slider.png" alt="...">                      
                                                    <div class="blog-new">
                                                        <div class="blue-new-tag new-tag">
                                                            <a class="fa fa-picture-o" href="#"></a>
                                                        </div>
                                                    </div>
                                                </div>     
                                                <div class="item active">  
                                                    <img src="assets/img/slider/about-slider.png" alt="...">                      
                                                    <div class="blog-new">
                                                        <div class="blue-new-tag new-tag">
                                                            <a class="fa fa-picture-o" href="#"></a>
                                                        </div>
                                                    </div>
                                                </div>                    
                                            </div>
                                            <!--Carousel Slide Button Start-->
                                            <div class="slider-btn-style-3">                        
                                                <a data-slide="prev" href="#main-slider" class="left carousel-control slider-btn-2">
                                                    <i class="fa fa-angle-left"></i>
                                                </a>
                                                <a data-slide="next" href="#main-slider" class="right carousel-control slider-btn-2">
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                            </div>     
                                        </section>           
                                        <!-- / Main Slider Ends -->  
                                    </div>
                                    <div class="blog-content">
                                        <a class="post-title" href="blog-single.html">Autoplay image slider post type</a>
                                        <ul class="post-meta">
                                            <li> <span class="fa fa-user green-color"></span> <a href="#">My Admin</a> </li>
                                            <li> <span class="fa fa-clock-o pink-color"></span> <a href="#">6 Days Ago </a> </li>
                                            <li> <span class="fa  fa-comment blue-color"></span> <a href="#">10</a> </li>
                                        </ul>
                                        <hr class="fullwidth-divider">
                                        <div class="post-detail">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse at purus eu eros maximus elementum sed eget erat. esent in varius diam, sit amet ultricies nisi. Maecenas urna odio, accumsan a pulvinar ac, placerat fringilla ex. Sed pretium feugiarat, eget iaculis urna. Suspendisse ac nulla urna.</p>
                                        </div>
                                        <div class="read-more">
                                            <a href="#" class="blue-btn btn"> Read More <i class="fa fa-caret-right"></i> </a>
                                        </div>
                                    </div>
                                </div>

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
                                        <a class="post-title" href="blog-single.html">Static Image Post Type</a>
                                        <ul class="post-meta">
                                            <li> <span class="fa fa-user green-color"></span> <a href="#">My Admin</a> </li>
                                            <li> <span class="fa fa-clock-o pink-color"></span> <a href="#">6 Days Ago </a> </li>
                                            <li> <span class="fa  fa-comment blue-color"></span> <a href="#">10</a> </li>
                                        </ul>
                                        <hr class="fullwidth-divider">
                                        <div class="post-detail">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse at purus eu eros maximus elementum sed eget erat. esent in varius diam, sit amet ultricies nisi. Maecenas urna odio, accumsan a pulvinar ac, placerat fringilla ex. Sed pretium feugiarat, eget iaculis urna. Suspendisse ac nulla urna.</p>
                                        </div>
                                        <div class="read-more">
                                            <a href="#" class="blue-btn btn"> Read More <i class="fa fa-caret-right"></i> </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="blog-box">
                                    <div class="blog-media">
                                        <blockquote>
                                            <div class="bg2-with-mask green-box-shadow">
                                                <span class="green-color-mask color-mask"></span>
                                                <div class="link-post  space-20 relative-block text-center">
                                                    <p><i class="fa fa-link"></i></p>
                                                    <a href="#" class="italic-font">http://themeforest.net/user/jthemes</a> 
                                                </div>
                                            </div>
                                        </blockquote>
                                    </div>
                                    <div class="blog-content">
                                        <a class="post-title" href="blog-single.html">Share Link Post Type</a>
                                        <ul class="post-meta">
                                            <li> <span class="fa fa-user green-color"></span> <a href="#">My Admin</a> </li>
                                            <li> <span class="fa fa-clock-o pink-color"></span> <a href="#">6 Days Ago </a> </li>
                                            <li> <span class="fa  fa-comment blue-color"></span> <a href="#">10</a> </li>
                                        </ul>
                                        <hr class="fullwidth-divider">
                                        <div class="post-detail">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse at purus eu eros maximus elementum sed eget erat. esent in varius diam, sit amet ultricies nisi. Maecenas urna odio, accumsan a pulvinar ac, placerat fringilla ex. Sed pretium feugiarat, eget iaculis urna. Suspendisse ac nulla urna.</p>
                                        </div>
                                        <div class="read-more">
                                            <a href="#" class="blue-btn btn"> Read More <i class="fa fa-caret-right"></i> </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="blog-box">
                                    <div class="blog-media">
                                        <blockquote>
                                            <div class="bg2-with-mask pink-box-shadow">
                                                <span class="pink-color-mask color-mask"></span>
                                                <div class="quotes-post relative-block text-center">
                                                    <p><i class="fa fa-quote-left"></i></p>
                                                    <p  class="italic-font">Crafting visually stunning memorable experiences for web and interfaces.</p> 
                                                    <i class="fa fa-quote-right"></i>
                                                </div>
                                            </div>
                                        </blockquote>
                                    </div>
                                    <div class="blog-content">
                                        <a class="post-title" href="blog-single.html">Share quotes post type </a>
                                        <ul class="post-meta">
                                            <li> <span class="fa fa-user green-color"></span> <a href="#">My Admin</a> </li>
                                            <li> <span class="fa fa-clock-o pink-color"></span> <a href="#">6 Days Ago </a> </li>
                                            <li> <span class="fa  fa-comment blue-color"></span> <a href="#">10</a> </li>
                                        </ul>
                                        <hr class="fullwidth-divider">
                                        <div class="post-detail">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse at purus eu eros maximus elementum sed eget erat. esent in varius diam, sit amet ultricies nisi. Maecenas urna odio, accumsan a pulvinar ac, placerat fringilla ex. Sed pretium feugiarat, eget iaculis urna. Suspendisse ac nulla urna.</p>
                                        </div>
                                        <div class="read-more">
                                            <a href="#" class="blue-btn btn"> Read More <i class="fa fa-caret-right"></i> </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="blog-box">
                                    <div class="blog-media">                                
                                        <div class="video-post">
                                            <iframe width="750" height="315" src="https://www.youtube.com/embed/xwma_Bu3OIg" allowfullscreen></iframe>
                                        </div>                             
                                    </div>
                                    <div class="blog-content">
                                        <a class="post-title" href="blog-single.html"> Video Post type </a>
                                        <ul class="post-meta">
                                            <li> <span class="fa fa-user green-color"></span> <a href="#">My Admin</a> </li>
                                            <li> <span class="fa fa-clock-o pink-color"></span> <a href="#">6 Days Ago </a> </li>
                                            <li> <span class="fa  fa-comment blue-color"></span> <a href="#">10</a> </li>
                                        </ul>
                                        <hr class="fullwidth-divider">
                                        <div class="post-detail">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse at purus eu eros maximus elementum sed eget erat. esent in varius diam, sit amet ultricies nisi. Maecenas urna odio, accumsan a pulvinar ac, placerat fringilla ex. Sed pretium feugiarat, eget iaculis urna. Suspendisse ac nulla urna.</p>
                                        </div>
                                        <div class="read-more">
                                            <a href="#" class="blue-btn btn"> Read More <i class="fa fa-caret-right"></i> </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="light-bg sorter">
                                    <div class="col-md-6 col-sm-12 show-items">                
                                        <span>Showing Items : 12 to 24 total 152</span>
                                    </div>
                                    <div class="col-md-6 col-sm-12 bottom-pagination text-right">                                                                
                                        <div class="inline-block">
                                            <div class="pagination-wrapper">
                                                <ul class="pagination-list">
                                                    <li class="prev"> <a href="#"> <i class="fa fa-angle-left"></i> </a> </li>
                                                    <li> <a href="#"> 1 </a> </li>
                                                    <li> <a href="#"> 2 </a> </li>
                                                    <li class="active"> 3 </li>
                                                    <li> <a href="#"> 4 </a> </li>
                                                    <li> <a href="#"> 5 </a> </li>
                                                    <li class="nxt"> <a href="#"> <i class="fa fa-angle-right"></i> </a> </li>
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
                                <h4 class="widget-title pink-bg"> <span>  CATEGORIES  </span> </h4>
                                <div class="blog-widget-content">
                                    <ul>                                
                                        <li class="cat-item"> <a href="#">Baby Clothes</a> </li>
                                        <li class="cat-item"> <a href="#">Kids Clothes</a> </li>
                                        <li class="cat-item"> <a href="#">Footwear</a> </li>
                                        <li class="cat-item"> <a href="#">Toys & Books</a> </li>
                                        <li class="cat-item"> <a href="#">Care & Feeding</a> </li>
                                        <li class="cat-item"> <a href="#">Baby Gear & Nursery</a> </li>
                                        <li class="cat-item"> <a href="#">Moms & Maternity</a> </li>
                                    </ul>
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