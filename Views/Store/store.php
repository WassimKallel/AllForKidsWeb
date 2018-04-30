
<?php
    include_once CONTROLLERS  . "/StoreManagement/ProductController.php";
    if(isset($_GET['p']) && $_GET['p'] > 0) {
        $current_page = $_GET['p'];
        $offset = ($_GET['p'] - 1) * ProductController::$limit;
    } else {
        $current_page = 1;
        $offset = 0;
    }
    $limit = ProductController::$limit;

    $products = ProductController::getAllProductsWithPagination($offset);
    $products_count = ProductController::getProductsCount();
?>

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
                  
                        <h3 class="sub-title"> All Products </h3>
                        <hr class="dash-divider">
                        <ol class="breadcrumb breadcrumb-menubar">
                            <li><a href="#">Home</a>  >  <a href="#">Store</a> </li>                             
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
                        
                            </div>
                        </div>
                        <div class="col-md-6 pull-right col-sm-12">
                            <div class="row">
                               
                                <div class="page-by   col-md-12 text-right">
                                    <span>Page:</span>
                                    <div class="inline-block">
                                            <div class="pagination-wrapper">
                                                <ul class="pagination-list">

                                                    <li class="prev"> 
                                                        <a <?= $current_page == 1 ? '' : 'href="?p='. (int)($current_page - 1) .'"' ?>> 
                                                            <i class="fa fa-angle-left"></i> 
                                                        </a> 
                                                    </li>
                                                
                                                    <?php
                                                        for ($i=1; $i <= ceil($products_count / $limit) ; $i++) { 
                                                    ?>
                                                        <li <?= $current_page == $i ? 'class="active"' : '' ?> > 
                                                            <a <?= $current_page == $i ? '' : 'href="?p='. $i .'"' ?> > <?= $i ?> </a>
                                                        </li>
                                                    <?php
                                                        }
                                                    ?>
                                                    <li class="nxt"> 
                                                        <a <?= 
                                                        intval($current_page) === intval(ceil($products_count / $limit)) 
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
                    </div>
                    <div class="tab-content">
                        <div id="grid-view" class="tab-pane fade active in" role="tabpanel">
                            <div class="row">
                          
                            <?php foreach($products as $p) { ?>
                                <div class="col-md-3 col-sm-4 grid-box">
                                    <div class="product-details">
                                        <div class="product-media light-bg">
                                            <span class="hover-image light-bg">
                                                <img src="<?= DATA_URL . $p->image ?>" alt="">
                                            </span>
                                            <img alt="product-img" src="<?= DATA_URL . $p->image ?>">
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
                                  
                                            <div class="product-name">
                                                <p> <a href="#"><?= $p->name ?></a> </p>
                                            </div>
                                            <div class="product-price">
                                                <h4 class="pink-btn-small"> <?= $p->unit_price ?> DT HT</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                             
                            </div>
                        </div>
                        <div id="list-view" class="tab-pane fade" role="tabpanel">
                   
                            <?php foreach($products as $p) { ?>
                            <div class="list-category-details">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="product-media light-bg">
                                            <span class="hover-image light-bg">
                                                <img src="<?= DATA_URL . $p->image ?>" alt="">
                                            </span>
                                            <img src="<?= DATA_URL . $p->image ?>" alt="product-img">                                                                                       
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="product-content">                             
                                            <div class="product-name">
                                                <a href="product?id=<?= $p->id ?> "><?= $p->name ?></a>                                               
                                            </div>
                                            <div class="product-price">
                                                <h4 class="pink-btn-small"><?= $p->unit_price ?> DT HT </h4>
                                            </div>
                                            <div class="product-discription">
                                                <p><?= $p->short_description ?></p>
                                            </div>
                                            <div class="add-to-cart">
                                                <a class="blue-btn btn" href="#"> <i class="fa fa-shopping-cart white-color"></i> Add to Cart</a>
                                                <a class="btn default-btn" href="product?id=<?= $p->id ?> "> <i class="fa fa-eye"></i> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>                         
                            </div>
                            <?php } ?>
                        </div>
                    </div>

            <div class="light-bg sorter">
                                    <div class="col-md-6 col-sm-12 show-items">                
                                        <span>Showing Items : <?= $offset + 1 ?>  to <?= $offset + $products_count ?> total <?= $products_count ?></span>
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
                                                        for ($i=1; $i <= ceil($products_count / $limit) ; $i++) { 
                                                    ?>
                                                        <li <?= $current_page == $i ? 'class="active"' : '' ?> > 
                                                            <a <?= $current_page == $i ? '' : 'href="?p='. $i .'"' ?> > <?= $i ?> </a>
                                                        </li>
                                                    <?php
                                                        }
                                                    ?>
                                                    <li class="nxt"> 
                                                        <a <?= 
                                                        intval($current_page) === intval(ceil($products_count / $limit)) 
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
            </section>
            <!-- / Product Category Ends -->



        <?php include VIEWS . "/partial/footer.php" ; ?>
        </main>
    </body>
</html>