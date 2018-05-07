
<?php
    include_once CONTROLLERS  . "/StoreManagement/ProductController.php";
    if(!isset($_GET['id'])) {
        header('Location:' . ERROR . 404);
        exit();
    }
    else {
        $product = ProductController::getProduct($_GET["id"]);
        if (empty($product) || !$product) {
            header('Location: ' . ERROR . 404);
            exit();
        }else {
            $category = ProductController::getCategory($product->category_id);
            if (empty($category) || !$category || $category->active == 0 ) {
                
                header('Location: ' . ERROR . 404);
                exit();
            }
        }
    }
    
    $most_selled_products = ProductController::getMostSelledProducts(3);
    $related_products = ProductController::getRelatedProducts($category->id,5);
    
?>

<?php include VIEWS . "/partial/header.php" ; ?>

    <body id="home" class="wide">
        <main class="wrapper"> 
        <?php include VIEWS . "/partial/menu.php" ; ?>


            <!-- Breadcrumbs Start -->
            <section class="breadcrumb-bg margin-bottom-80">     
                <span class="gray-color-mask color-mask"></span>
                <div class="theme-container container">
                    <div class="site-breadcrumb relative-block space-75">
                        <h2 class="section-title">
                            <span>
                                <span class="italic-font"><?= $category->name ?></span>
                            </span>
                        </h2>
                        <h3 class="sub-title"> <?= $product->name ?> </h3>
                        <hr class="dash-divider">
                        <ol class="breadcrumb breadcrumb-menubar">
                            <li><a href="#">Home</a>  >  <a href="store_category?id=<?= $category->id ?>" ><?= $category->name ?></a>  > <a href="#"><?= $product->name ?></a>   </li>                             
                        </ol>
                    </div>  
                </div>
            </section>
            <!-- / Breadcrumbs Ends -->         


            <article class="container theme-container">

                <!-- Single Products Start -->
                <section id="product-fullwidth" class="space-bottom-45"> 
                    <div class="single-product-wrap">      
                        <div class="list-category-details">
                            <div class="row">
                                <div class="col-md-7 col-sm-7">
                                    <div class="row">
                                        <!-- Main Slider Start -->
                                        <section id="main-slider" class="carousel slide main-slider" >  
                                            <!--Carousel Slide Button Start-->
                                            <div class="slider-pagination col-md-2 col-sm-3  col-xs-3">                
                                                <ul class="product-thumbnails">
                                                    <li  data-slide-to="0" data-target="#main-slider">
                                                        <a href="#"><img class="img-responsive" alt="Image Not Found" src="<?= DATA_URL . $product->image ?>"></a></li>
                                                </ul>  
                                            </div>    
                                            <div class="col-md-10 col-sm-9  col-xs-9">
                                                <div class="carousel-inner product-fullwidth light-bg slider">
                                                    <div class="item active">  
                                                        <img src="<?= DATA_URL . $product->image ?>" alt="Image Not Found">
                                                    </div>     
                                        
                                                </div>
                                            </div>

                                        </section>
                                        <!-- / Main Slider Ends -->  
                                    </div>
                                </div>
                                <div class="col-md-5 col-sm-5">
                                    <div class="product-content">
                                                                      
                                        <div class="product-name">
                                            <a href="#"><?= $product->name ?></a>                                              
                                        </div>
                                        <div class="product-price">
                                            <h4 class="pink-btn-small"> <?= $product->unit_price  ?>DT HT </h4>
                                        </div>
                                        <div class="product-availability">
                                            <ul class="stock-detail">
                                            <?php if ($product->quantity > 0) {
                                                ?>
                                                <li>Available:<strong class="green-color"> <i class="fa fa-check-circle"></i> In Stock </strong> | </li>
                                            <?php
                                            } else { ?>
                                                <li>Available:<strong class="pink-color"> Out of Stock </strong> | </li>
                                            <?php } ?>
                                                <li>Product Id:<strong> #<?= $product->reference ?> </strong> </li>
                                            </ul>
                                            <hr class="fullwidth-divider">                                            
                                        </div>
                                        <div class="product-size">
                                            <form class="product-form">
                                                <div class="row">
                             
                                                    <div class="form-group selectpicker-wrapper">
                                                        <label>QTY</label>
                                                        <select id="quantity_select" title="Looking to Buy" data-toggle="tooltip" data-width="100%" data-live-search="true" class="selectpicker input-price bs-select-hidden">
                                                            <option class="bs-title-option" value="1">01</option>
                                                            <option value="1" >01</option>
                                                            <option value="2">02</option>
                                                            <option value="3" >03</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </form>
                                       
                                            <hr class="fullwidth-divider">   
                                        </div>
                                        <div class="product-discription">
                                            <p><?= $product->short_description ?></p>
                                        </div>
                                        <div class="add-to-cart">
                                        <a class="blue-btn btn" onclick="addToCart(<?= $product->id ?>) ;return;"> <i class="fa fa-shopping-cart white-color"></i> Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>                         
                        </div>  
                    </div>            
                </section>
                <!-- Single Products Ends -->
                <!-- Single Products Description Start -->
                <section id="description-item">
                    <div class="row">
                        <div class="col-md-8 col-sm-8">
                            <!-- Product Best Sellers Start -->
                            <section id="single-product-tabination" class="space-bottom-45">                            
                                <div class="light-bg product-tabination default-box-shadow">
                                    <div class="tabination">
                                        <div class="product-tabs" role="tabpanel">
                                            <!-- Nav tabs -->
                                            <ul role="tablist" class="nav nav-tabs navtab-horizontal">
                                                <li  role="presentation" class="active">
                                                    <a class="green-background" data-toggle="tab" role="tab"  href="#description" aria-expanded="true">Description</a>
                                                </li>
                              
                                            </ul>
                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <!-- =============================== Description ============================= -->
                                                <div id="description" class="tab-pane fade active in" role="tabpanel">
                                                    <div class="col-md-12 product-wrap">
                                                        <div class="title-wrap">
                                                            <h2 class="section-title">
                                                                <span>
                                                                    <span class="funky-font blue-tag">Product</span> 
                                                                    <span class="italic-font">Description</span>
                                                                </span>
                                                            </h2>  
                                                        </div>
                                                        <div class="product-disc space-bottom-35">
                                                            <p>
                                                         <?= $product->description ?>
                                                            </p>
                                                  
                                                        </div>
                                                    </div>
                                                </div>
                                   
                            
                                            </div>
                                        </div>
                                    </div>            
                    
                                </div>                                    
                            </section>
                            <!-- / Product Best Sellers Ends -->
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="light-bg padding-25 top-rated default-box-shadow">
                                <div class="row">
                                    <div class="title-wrap col-md-9">
                                        <h2 class="section-title">
                                            <span>
                                                <span class="funky-font green-tag">Most </span> 
                                                <span class="italic-font">Selled Product</span>
                                            </span>
                                        </h2>
                                    </div>                                 
                      
                                </div>
                                <div class="top-rated-owl-slider">

                                    <div class="item">                                            
                                    <?php foreach($most_selled_products as $p) {
                                        ?>
                                        <div class="category-details">
                                            <div class="col-md-4 thumbnail">
                                                <div class="white-bg">
                                                    <img alt="product-img" src="<?= DATA_URL . $p->image ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="product-content">
                            
                                                    <div class="product-name">
                                                        <a href="product?id=<?= $p->id ?> "><?= $p->name ?></a>                                                      
                                                    </div>
                                                    <div class="product-price">
                                                        <h4 class="pink-btn-small"> <?= $p->name  ?> DT HT </h4>
                                                    </div>
                                                    <div class="product-overlay">
                                                        <a href="" onclick="addToCart(<?= $product->id ?>) ;return;" class="addcart blue-background fa fa-shopping-cart"></a>                                                                
                                                        <a class="preview pink-background fa fa-eye" href="product?id=<?= $p->id ?> "> </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
                                    <?php
                                    } ?>
                                    </div>
                          
                                </div>
                            </div>
                        </div>                     
                    </div>  
                </section>
                <!-- Single Products Description Ends -->
                <!-- Related Products Start -->
                <section id="product-tabination-1" class="space-bottom-45">
                    <div class="container theme-container">
                        <div class="title-wrap with-border space-25">
                            <h2 class="section-title with-border">
                                <span class="white-bg">
                                    <span class="funky-font blue-tag">Related</span> 
                                    <span class="italic-font">Product</span>
                                </span>
                            </h2>  
                            <h3 class="sub-title">Recently Item You Viewed</h3>
                            <hr class="dash-divider">                       
                        </div>     
                        <div class="light-bg product-tabination">
                            <div class="tabination">
                                <div class="product-tabs" role="tabpanel">
                                    <!-- Nav tabs -->
                                    <ul role="tablist" class="nav nav-tabs navtab-horizontal">
                                        <li role="presentation" class="active">
                                            <a class="green-background" data-toggle="tab" role="tab"  href="#related-product" aria-expanded="true">Related Products</a>
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
                                                            <span class="funky-font blue-tag">Related </span> 
                                                            <span class="italic-font">Products</span>
                                                        </span>
                                                    </h2>  
                                                    <div class="poroduct-pagination">
                                                        <span class="product-slide blue-background next"> <i class="fa fa-chevron-left"></i> </span>
                                                        <span class="product-slide blue-background prev"> <i class="fa fa-chevron-right"></i> </span>
                                                    </div>
                                                </div>  
                                                <div class="product-slider owl-carousel owl-theme">        
                                                <?php foreach($related_products as $p) {?>                                      
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
            </article>




        <?php include VIEWS . "/partial/footer.php" ; ?>
        </main>
    </body>
</html>