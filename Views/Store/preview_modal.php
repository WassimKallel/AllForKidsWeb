
<?php 
    if(!isset($_POST["product_id"])) {
        echo "NOT FOUND";
    }else {
        include_once CONTROLLERS . '/StoreManagement/ProductController.php';
        $product = ProductController::getProduct($_POST["product_id"]);
    }
?> 
<div class="modal fade" id="product-preview" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content space-40">
                    <a aria-hidden="true" data-dismiss="modal" class="sb-close-btn close fa fa-times" href="#"></a>

                    <button aria-hidden="true" data-dismiss="modal" class="close sb-close-btn" type="button">
                        <i class="fa fa-times"></i>
                    </button>
                    <!-- Single Products Start -->
                    <div class="clearfix"></div>
                    <section id="product-fullwidth" class="clearfix">

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
                                                        <select id="quantity_select" >
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
                                            <a class="pink-btn btn" href="product?id=<?= $product->id ?>"> <i class="fa fa-shopping-cart white-color"></i> View Product details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>                         
                        </div>  
                    </div>     
                    </section>
                    <!-- Single Products Ends -->
                </div>
            </div>
        </div>