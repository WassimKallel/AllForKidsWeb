<?php include VIEWS . "/partial/header.php" ; ?>

    <body id="home" class="wide">

        <!-- WRAPPER -->

        <main class="wrapper"> 
        <?php include VIEWS . "/partial/menu.php" ; ?>

 <!-- Breadcrumbs Start -->
 <section class="breadcrumb-bg margin-bottom-80">     
                <span class="gray-color-mask color-mask"></span>
                <div class="theme-container container">
                    <div class="site-breadcrumb relative-block space-75">
                        <h2 class="section-title">
                            <span>
                                <span class="funky-font blue-tag">Child </span> 
                                <span class="italic-font">Fashion(0-5 Years)</span>
                            </span>
                        </h2>
                        <h3 class="sub-title"> Fashion: All For The Small</h3>
                        <hr class="dash-divider">
                        <ol class="breadcrumb breadcrumb-menubar">
                            <li><a href="#">Home</a>  >  <a href="#">Fashion</a>  >  <span class="blue-color">Child Fashion </span> </li>                             
                        </ol>
                    </div>  
                </div>
            </section>
            <!-- / Breadcrumbs Ends -->

            <!-- Main Slider Start -->

            <section class="container theme-container" >     
                <div  id="main-slider"  class="carousel slide main-slider  category-slider light-bg">
                    <div class="carousel-inner slider">
                        <div class="item">  
                            <img src="assets/img/slider/category-slider1.png" alt="...">                       
                            <div class="caption-text text-center">                                    
                                <div class="title-wrap">
                                    <h2 class="section-title">
                                        <span>
                                            <span class="funky-font blue-tag">Sale </span> 
                                            <span class="italic-font">Today Deal</span>
                                        </span>
                                    </h2>  
                                    <h2 class="discount pink-color">Upto <span> 30% </span> off</h2>
                                    <hr class="dash-divider-small">
                                    <a class="blue-color title-link" href="#"> Shop Now <i class="fa fa-caret-right"></i> </a>
                                </div>       
                            </div>
                        </div>     
                        <div class="item active">  
                            <img src="assets/img/slider/category-slider1.png" alt="...">                       
                            <div class="caption-text text-center">                                    
                                <div class="title-wrap">
                                    <h2 class="section-title">
                                        <span>
                                            <span class="funky-font blue-tag">Sale </span> 
                                            <span class="italic-font">Today Deal</span>
                                        </span>
                                    </h2>  
                                    <h2 class="discount pink-color">Upto <span> 30% </span> off</h2>
                                    <hr class="dash-divider-small">
                                    <a class="blue-color title-link" href="#"> Shop Now <i class="fa fa-caret-right"></i> </a>
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
                </div>
            </section>
            <!-- / Main Slider Ends -->   

            <!-- Product Category Start -->
            <section id="product-category-fullwidth" class="space-bottom-45"> 
                <div class="container theme-container">
                    <div class="light-bg margin-30 sorter">
                        <div class="col-md-6 col-sm-12">
                            <div class="row">
                                <div class="view-as col-md-3 col-sm-3">
                                    <span>View as:</span>
                                    <div class="inline-block">
                                        <ul class="nav-tabs tabination">
                                            <li class="active">
                                                <a data-toggle="tab" href="#grid-view" aria-expanded="true">                                                    
                                                    <i class="fa fa-th-large"></i>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a data-toggle="tab" href="#list-view" aria-expanded="false">
                                                    <i class="fa fa-th-list"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sort-by col-md-6 col-sm-9">
                                    <span>Sort By:</span>
                                    <div class="inline-block">
                                        <form class="filter-form">  
                                            <div class="form-group selectpicker-wrapper">
                                                <select
                                                    class="selectpicker input-price" data-live-search="true" data-width="100%"
                                                    data-toggle="tooltip" title="Best Sellers">
                                                    <option>Most Popular</option>
                                                    <option>Latest Items</option>
                                                    <option>Best Sellers</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 pull-right col-sm-12">
                            <div class="row">
                                <div class="show-as col-sm-3 col-md-4 col-md-offset-2 text-right">
                                    <span>Show:</span>
                                    <div class="inline-block">
                                        <form class="filter-form">  
                                            <div class="form-group selectpicker-wrapper">
                                                <select
                                                    class="selectpicker input-price" data-live-search="true" data-width="100%"
                                                    data-toggle="tooltip" title="16">
                                                    <option>20</option>
                                                    <option>24</option>
                                                    <option>All</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="page-by col-sm-9 col-md-6 text-right">
                                    <span>Page:</span>
                                    <div class="inline-block">
                                        <div class="pagination-wrapper">
                                            <ul class="pagination-list">
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
                    </div>
                    <div class="tab-content">
                        <div id="grid-view" class="tab-pane fade active in" role="tabpanel">
                            <div class="row">
                                <div class="col-md-3 col-sm-4 grid-box">
                                    <div class="product-details">
                                        <div class="product-media light-bg">
                                            <span class="hover-image light-bg">
                                                <img src="assets/img/product/cat-7.png" alt="">
                                            </span>
                                            <img alt="product-img" src="assets/img/product/cat-1.png">
                                            <div class="product-new">
                                                <div class="blue-new-tag new-tag">
                                                    <a href="#" class="funky-font">New</a>
                                                </div>
                                            </div>
                                            <div class="product-overlay">
                                                <a href="#" class="addcart blue-background fa fa-shopping-cart"></a>                                                                
                                                <a href="#" class="likeitem green-background fa fa-heart"></a>
                                                <a class="preview pink-background fa fa-eye" href="#product-preview" data-toggle="modal"></a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="rating">                                                              
                                                <span class="star active"></span>
                                                <span class="star active"></span>
                                                <span class="star active"></span>
                                                <span class="star half"></span>
                                                <span class="star"></span>
                                            </div>
                                            <div class="product-name">
                                                <p> <a href="#">Noddy Hooded Sweatshirt Full Sleeves</a> </p>
                                            </div>
                                            <div class="product-price">
                                                <h4 class="pink-btn-small"> $50.00 </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 grid-box">
                                    <div class="product-details">
                                        <div class="product-media light-bg">
                                            <span class="hover-image light-bg">
                                                <img src="assets/img/product/cat-7.png" alt="">
                                            </span>
                                            <img alt="product-img" src="assets/img/product/cat-2.png">                                    
                                            <div class="product-overlay">
                                                <a href="#" class="addcart blue-background fa fa-shopping-cart"></a>                                                                
                                                <a href="#" class="likeitem green-background fa fa-heart"></a>
                                                <a class="preview pink-background fa fa-eye" href="#product-preview" data-toggle="modal"></a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="rating">                                                              
                                                <span class="star active"></span>
                                                <span class="star active"></span>
                                                <span class="star active"></span>
                                                <span class="star half"></span>
                                                <span class="star"></span>
                                            </div>
                                            <div class="product-name">
                                                <p>  <a href="#">Babyhug Layer Pattern Skirt</a>     </p>
                                            </div>
                                            <div class="product-price">
                                                <h4 class="pink-btn-small"> $50.00 </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="list-view" class="tab-pane fade" role="tabpanel">
                            <div class="list-category-details">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="product-media light-bg">
                                            <span class="hover-image light-bg">
                                                <img src="assets/img/product/cat-7.png" alt="">
                                            </span>
                                            <img src="assets/img/product/cat-1.png" alt="product-img">
                                            <div class="product-new">
                                                <div class="blue-new-tag new-tag">
                                                    <a class="funky-font" href="#">New</a>
                                                </div>
                                            </div>                                            
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="product-content">
                                            <div class="rating">                                                              
                                                <span class="star active"></span>
                                                <span class="star active"></span>
                                                <span class="star active"></span>
                                                <span class="star half"></span>
                                                <span class="star"></span>
                                                <div class="product-review">
                                                    <ul>
                                                        <li>03 Review </li>
                                                        <li> | <a href="#"> Add Your Review </a> </li>
                                                    </ul>
                                                </div>
                                            </div>                                            
                                            <div class="product-name">
                                                <a href="#">Noddy Hooded Sweatshirt Full Sleeves</a>                                              
                                            </div>
                                            <div class="product-price">
                                                <h4 class="pink-btn-small"> $50.00 </h4>
                                            </div>
                                            <div class="product-discription">
                                                <p>Vivamus porttitor elit vitae sapien auctor, id elementum felis volutpat. Vestibulum euismd  rutrum tincidunt sollicitudin. Maecenas odio ex, congue id hendrerit et, sagittis vel arcu. Phasellus nec felis a dolor suscipit rhoncus. Vivamus porttitor elit vitae sapien auctor, id elementum felis volutpat. Vestibulum euismod.</p>
                                            </div>
                                            <div class="add-to-cart">
                                                <a class="blue-btn btn" href="#"> <i class="fa fa-shopping-cart white-color"></i> Add to Cart</a>
                                                <a class="btn default-btn" href="#"> <i class="fa fa-heart"></i> </a>
                                                <a class="btn default-btn" href="#"> <i class="fa fa-eye"></i> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>                         
                            </div>
                            <div class="list-category-details">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="product-media light-bg">
                                            <span class="hover-image light-bg">
                                                <img src="assets/img/product/cat-7.png" alt="">
                                            </span>
                                            <img src="assets/img/product/cat-2.png" alt="product-img">                                                                                       
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="product-content">
                                            <div class="rating">                                                              
                                                <span class="star active"></span>
                                                <span class="star active"></span>
                                                <span class="star active"></span>
                                                <span class="star half"></span>
                                                <span class="star"></span>
                                                <div class="product-review">
                                                    <ul>
                                                        <li>03 Review </li>
                                                        <li> | <a href="#"> Add Your Review </a> </li>
                                                    </ul>
                                                </div>
                                            </div>                                            
                                            <div class="product-name">
                                                <a href="#">Babyhug Layer Pattern Skirt</a>                                               
                                            </div>
                                            <div class="product-price">
                                                <h4 class="pink-btn-small"> $50.00 </h4>
                                            </div>
                                            <div class="product-discription">
                                                <p>Vivamus porttitor elit vitae sapien auctor, id elementum felis volutpat. Vestibulum euismd  rutrum tincidunt sollicitudin. Maecenas odio ex, congue id hendrerit et, sagittis vel arcu. Phasellus nec felis a dolor suscipit rhoncus. Vivamus porttitor elit vitae sapien auctor, id elementum felis volutpat. Vestibulum euismod.</p>
                                            </div>
                                            <div class="add-to-cart">
                                                <a class="blue-btn btn" href="#"> <i class="fa fa-shopping-cart white-color"></i> Add to Cart</a>
                                                <a class="btn default-btn" href="#"> <i class="fa fa-heart"></i> </a>
                                                <a class="btn default-btn" href="#"> <i class="fa fa-eye"></i> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>                         
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
            </section>
            <!-- / Product Category Ends -->

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



        <?php include VIEWS . "/partial/footer.php" ; ?>
        </main>
    </body>
</html>