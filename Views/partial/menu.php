<?php include VIEWS . "/partial/login_pop_up.php"; ?> 
            <!-- Header -->
            <header class="light-bg">
                <!-- Header top bar starts-->
                <section class="top-bar"> 
                    <div class="bg-with-mask box-shadow">
                        <span class="blue-color-mask color-mask"></span>
                        <div class="container theme-container">           
                            <nav class="navbar navbar-default top-navbar">  
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" >
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <a class="visible-xs logo" href="#"> <img src="assets/img/logo/logo.png" alt="Baby Store"> </a>
                                </div>                           
                                <div class="collapse navbar-collapse no-padding" id="bs-example-navbar-collapse-1">
                                    <ul class="nav navbar-nav">
                                        <li><a href="#"> <span class="fa fa-phone"></span> Call us : 5555555555</a></li>
                                    </ul>
                                    <ul class="nav navbar-nav pull-right">
                                        <li><a href="<?= HOME_DIR ?>">Home</a></li>
                                        <li><a href="contact">Contact Us</a></li>
                                        <li><a href="blog">Blog</a></li>
                                        <li><a href="forum">Forum</a></li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" >My Account <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                            <?php if ($GLOBALS["AuthController"]::$is_logged_in)  {?>
                                                <li><a href="profile">Profile (<?=  $GLOBALS["AuthController"]::getCurrentUser()->getFullName() ?>)</a></li>
                                                <li><a href="logout">Logout</a></li>
                                                <?php } else {
                                                    ?>
                                                <li><a href="#login-register" data-toggle="modal">Register/Login</a></li>
                                                <?php
                                                } ?>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>                         
                            </nav>                            
                        </div>                       
                    </div>
                    <img src="assets/img/pattern/ziz-zag.png" class="blue-zig-zag" alt="..">
                </section>
                <!-- /Header top bar ends -->
                <section class="header-wrapper header fixed">
                    <article class="header-middle">
                        <div class="container theme-container ">       
                            <!-- Logo -->
                            <div class="logo hidden-xs col-md-3  col-sm-3">
                                <a href="index-2.html"><img src="assets/img/logo/logo.png" alt="Baby Store"/></a>
                            </div>
                            <!-- /Logo -->

                            <!-- Header search -->
                            <div class="header-search col-md-6  col-sm-5">                               
                                <form action="#" class="search-form">
                                    <div class="search-selectpicker form-group selectpicker-wrapper col-sm-4 no-padding">
                                        <select
                                            class="selectpicker input-price" data-live-search="true" data-width="100%"
                                            data-toggle="tooltip" title="Search In Categories">
                                            <option>Baby Clothes</option>
                                            <option>Kids Clothes</option>
                                            <option>Toys & Books </option>
                                        </select>
                                    </div>
                                    <div class="no-padding col-sm-8 search-cat">
                                        <label>
                                            <span class="screen-reader-text">Search for:</span>
                                            <input type="search" title="Search for:" name="s" value="" placeholder="Search for a Category, Brand or Product" class="search-field">
                                        </label>
                                        <input type="submit" value="Search" class="search-submit">
                                    </div>
                                </form>                                
                            </div>
                            <!-- /Header search -->

                            <!-- Header shopping cart -->
                            <div class="header-cart col-md-3  col-sm-4">
                                <div class="cart-wrapper">
                                    <a href="javascript:void(0)" class="btn cart-btn default-btn">
                                        <i class="fa fa-shopping-cart blue-color"></i>
                                        cart:   <span class="blue-color"> <strong> (02 items) </strong> </span>
                                        <span class="fa fa-caret-down"></span>
                                    </a>                                  
                                </div>                            
                                <div class="cart-dropdown bg2-with-mask">
                                    <span class="blue-color-mask blue-box-shadow color-mask-radius"></span>
                                    <div class="pos-relative">
                                        <table class="cart-table">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="product-media">                                                            
                                                            <a href="#">  <img alt="product-img" src="assets/img/cart/small-1.png"></a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="product-content">                                                     
                                                            <div class="product-name">
                                                                <a href="#">Noddy Hooded Sweat</a>
                                                                <span> Shirt Full Sleeves </span>
                                                            </div>
                                                            <div class="product-price">
                                                                <h5 class="price"><b> $200.00*2 </b></h5>
                                                                <a href="#" class="delete fa fa-close">  </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>      
                                                <tr>
                                                    <td>
                                                        <div class="product-media">                                                            
                                                            <a href="#"> <img alt="product-img" src="assets/img/cart/small-2.png"></a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="product-content">                                                     
                                                            <div class="product-name">
                                                                <a href="#">Noddy Hooded Sweat</a>
                                                                <span> Shirt Full Sleeves </span>
                                                            </div>
                                                            <div class="product-price">
                                                                <h5 class="price"><b> $100.00*1 </b></h5>
                                                                <a href="#" class="delete fa fa-close">  </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>      
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td>
                                                        <div class="sub-total">
                                                            <span class="title">Total:</span>
                                                            <span class="amount"> <b> $500 </b> </span>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        <div class="chk-out">
                                            <a href="check-out.html" class="btn default-btn">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Header shopping cart -->
                        </div>
                    </article>

                    <article class="header-navigation">
                        <div class="container theme-container ">       
                            <nav class="navbar navbar-default product-menu"> 
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#product-menu" >
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>                               
                                </div>
                                <div class="collapse navbar-collapse no-padding" id="product-menu">
                                    <ul class="nav navbar-nav">
         
                                        <li class="dropdown mega-dropdown">
                                           			
                                            <div class="dropdown-menu mega-dropdown-menu">
                                                <div class="">
                                                    <!-- Nav tabs -->
                                                    <ul class="nav nav-tabs" role="tablist">
                                                        <li><a href="#all" role="tab" data-toggle="tab">All</a></li>
                                                        <li><a href="#girls" role="tab" data-toggle="tab">Girl</a></li>
                                                        <li  class="active"><a href="#boys" role="tab" data-toggle="tab">Boy</a></li>
                                                        <li><a href="#new-arrivals" role="tab" data-toggle="tab">New Arrivals</a></li>
                                                        <li><a href="#fashion" role="tab" data-toggle="tab">Fashion</a></li>
                                                        <li><a href="#accessories" role="tab" data-toggle="tab">Accessories</a></li>
                                                        <li><a href="#specials" role="tab" data-toggle="tab">Specials</a></li>
                                                    </ul>  
                                                    <!-- Tab panes -->
                                                    <div class="tab-content light-bg">
                                                        <div class="tab-pane fade" id="all">
                                                            <div class="block-bg">                                                            
                                                                <div class="col-md-3 col-sm-6  menu-block">
                                                                    <div class="sub-list">
                                                                        <h2 class="title-2 sub-title-small">Shop by Category</h2>                                                                
                                                                        <ul>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">ShirtsT-Shirts</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Pajamas</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Onesies & Rompers</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Party Wear</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Kurta & Dhoti Sets</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Night Wear</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Inner Wear</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Theme Costumes</a> </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 col-sm-6  menu-block">
                                                                    <div class="sub-list">
                                                                        <h2 class="title-2 sub-title-small">Shop by Age</h2>
                                                                        <ul>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">2 to 4 years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">2 to 6 years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">6 to 8 years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">8 to 10 years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">10+ years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">2 to 4 years</a> </li>
                                                                            <li> <a href="#"> <strong> Combo Packs</strong> </a> </li>
                                                                            <li> <a href="#"> <strong> On Sale- Boys Clothes </strong> </a> </li>
                                                                            <li> <a href="#"> <strong> On Sale- Girls Clothes </strong> </a> </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 col-sm-6  menu-block">
                                                                    <div class="sub-list">
                                                                        <h2 class="title-2 sub-title-small">Shop by Colors</h2>
                                                                        <ul>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Black</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Blue</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Green</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Red</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Orange</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Pink</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">White</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">All</a> </li>
                                                                        </ul>
                                                                    </div>
                                                                </div> 
                                                                <div class="col-md-3 col-sm-6  menu-block menu-block-img no-padding">
                                                                    <div class="title-wrap">
                                                                        <h2 class="section-title">
                                                                            <span>
                                                                                <span class="funky-font blue-tag">Sale </span> 
                                                                                <span class="italic-font">Today Deal</span>
                                                                            </span>
                                                                        </h2>                                                                   
                                                                        <h3 class="pink-color">Up To <strong> 30% </strong> Off</h3>      
                                                                        <hr class="dash-divider-small">
                                                                        <a href="#" class="blue-color title-link"> Shop Now <i class="fa fa-caret-right"></i> </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="girls">
                                                            <div class="block-bg">
                                                                <div class="col-md-3 col-sm-6  menu-block">
                                                                    <div class="sub-list">
                                                                        <h2 class="title-2 sub-title-small">Shop by Category</h2>                                                                
                                                                        <ul>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">ShirtsT-Shirts</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Pajamas</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Onesies & Rompers</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Party Wear</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Kurta & Dhoti Sets</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Night Wear</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Inner Wear</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Theme Costumes</a> </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 col-sm-6  menu-block">
                                                                    <div class="sub-list">
                                                                        <h2 class="title-2 sub-title-small">Shop by Age</h2>
                                                                        <ul>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">2 to 4 years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">2 to 6 years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">6 to 8 years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">8 to 10 years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">10+ years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">2 to 4 years</a> </li>
                                                                            <li> <a href="#"> <strong> Combo Packs</strong> </a> </li>
                                                                            <li> <a href="#"> <strong> On Sale- Boys Clothes </strong> </a> </li>
                                                                            <li> <a href="#"> <strong> On Sale- Girls Clothes </strong> </a> </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 col-sm-6  menu-block">
                                                                    <div class="sub-list">
                                                                        <h2 class="title-2 sub-title-small">Shop by Colors</h2>
                                                                        <ul>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Black</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Blue</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Green</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Red</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Orange</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Pink</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">White</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">All</a> </li>
                                                                        </ul>
                                                                    </div>
                                                                </div> 
                                                                <div class="col-md-3 col-sm-6  menu-block  menu-block-img no-padding">
                                                                    <div class="title-wrap">
                                                                        <h2 class="section-title">
                                                                            <span>
                                                                                <span class="funky-font blue-tag">Sale </span> 
                                                                                <span class="italic-font">Today Deal</span>
                                                                            </span>
                                                                        </h2>                                                                   
                                                                        <h3 class="pink-color">Up To <strong> 30% </strong> Off</h3>      
                                                                        <hr class="dash-divider-small">
                                                                        <a href="#" class="blue-color title-link"> Shop Now <i class="fa fa-caret-right"></i> </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade  active in" id="boys">
                                                            <div class="block-bg">
                                                                <div class="col-md-3 col-sm-6  menu-block">
                                                                    <div class="sub-list">
                                                                        <h2 class="title-2 sub-title-small">Shop by Category</h2>                                                                
                                                                        <ul>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">ShirtsT-Shirts</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Pajamas</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Onesies & Rompers</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Party Wear</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Kurta & Dhoti Sets</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Night Wear</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Inner Wear</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Theme Costumes</a> </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 col-sm-6  menu-block">
                                                                    <div class="sub-list">
                                                                        <h2 class="title-2 sub-title-small">Shop by Age</h2>
                                                                        <ul>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">2 to 4 years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">2 to 6 years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">6 to 8 years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">8 to 10 years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">10+ years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">2 to 4 years</a> </li>
                                                                            <li> <a href="#"> <strong> Combo Packs</strong> </a> </li>
                                                                            <li> <a href="#"> <strong> On Sale- Boys Clothes </strong> </a> </li>
                                                                            <li> <a href="#"> <strong> On Sale- Girls Clothes </strong> </a> </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 col-sm-6  menu-block">
                                                                    <div class="sub-list">
                                                                        <h2 class="title-2 sub-title-small">Shop by Colors</h2>
                                                                        <ul>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Black</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Blue</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Green</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Red</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Orange</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Pink</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">White</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">All</a> </li>
                                                                        </ul>
                                                                    </div>
                                                                </div> 
                                                                <div class="col-md-3 col-sm-6  menu-block  menu-block-img no-padding">
                                                                    <div class="title-wrap">
                                                                        <h2 class="section-title">
                                                                            <span>
                                                                                <span class="funky-font blue-tag">Sale </span> 
                                                                                <span class="italic-font">Today Deal</span>
                                                                            </span>
                                                                        </h2>                                                                   
                                                                        <h3 class="pink-color">Up To <strong> 30% </strong> Off</h3>      
                                                                        <hr class="dash-divider-small">
                                                                        <a href="#" class="blue-color title-link"> Shop Now <i class="fa fa-caret-right"></i> </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                        <div class="tab-pane fade" id="new-arrivals">
                                                            <div class="block-bg">
                                                                <div class="col-md-3 col-sm-6  menu-block">
                                                                    <div class="sub-list">
                                                                        <h2 class="title-2 sub-title-small">Shop by Category</h2>                                                                
                                                                        <ul>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">ShirtsT-Shirts</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Pajamas</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Onesies & Rompers</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Party Wear</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Kurta & Dhoti Sets</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Night Wear</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Inner Wear</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Theme Costumes</a> </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 col-sm-6  menu-block">
                                                                    <div class="sub-list">
                                                                        <h2 class="title-2 sub-title-small">Shop by Age</h2>
                                                                        <ul>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">2 to 4 years</a> </li>
                                                                                    <span> Shirt Full Sleeves </span>
                                                            </div>
                                                            <div class="product-price">
                                                                <h5 class="price"><b> $100.00*1 </b></h5>
                                                                <a href="#" class="delete fa fa-close">  </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>      
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td>
                                                        <div class="sub-total">
                                                            <span class="title">Total:</span>
                                                            <span class="amount"> <b> $500 </b> </span>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        <div class="chk-out">
                                            <a href="check-out.html" class="btn default-btn">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Header shopping cart -->
                        </div>
                    </article>

                    <article class="header-navigation">
                        <div class="container theme-container ">       
                            <nav class="navbar navbar-default product-menu"> 
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#product-menu" >
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>                               
                                </div>
                                <div class="collapse navbar-collapse no-padding" id="product-menu">
                                    <ul class="nav navbar-nav">
                                        <li><a href="#">Baby Clothes</a></li>
                                        <li class="dropdown mega-dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Kids Cloth <span class="caret"></span></a>				
                                            <div class="dropdown-menu mega-dropdown-menu">
                                                <div class="">
                                                    <!-- Nav tabs -->
                                                    <ul class="nav nav-tabs" role="tablist">
                                                        <li><a href="#all" role="tab" data-toggle="tab">All</a></li>
                                                        <li><a href="#girls" role="tab" data-toggle="tab">Girl</a></li>
                                                        <li  class="active"><a href="#boys" role="tab" data-toggle="tab">Boy</a></li>
                                                        <li><a href="#new-arrivals" role="tab" data-toggle="tab">New Arrivals</a></li>
                                                        <li><a href="#fashion" role="tab" data-toggle="tab">Fashion</a></li>
                                                        <li><a href="#accessories" role="tab" data-toggle="tab">Accessories</a></li>
                                                        <li><a href="#specials" role="tab" data-toggle="tab">Specials</a></li>
                                                    </ul>  
                                                    <!-- Tab panes -->
                                                    <div class="tab-content light-bg">
                                                        <div class="tab-pane fade" id="all">
                                                            <div class="block-bg">                                                            
                                                                <div class="col-md-3 col-sm-6  menu-block">
                                                                    <div class="sub-list">
                                                                        <h2 class="title-2 sub-title-small">Shop by Category</h2>                                                                
                                                                        <ul>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">ShirtsT-Shirts</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Pajamas</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Onesies & Rompers</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Party Wear</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Kurta & Dhoti Sets</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Night Wear</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Inner Wear</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Theme Costumes</a> </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 col-sm-6  menu-block">
                                                                    <div class="sub-list">
                                                                        <h2 class="title-2 sub-title-small">Shop by Age</h2>
                                                                        <ul>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">2 to 4 years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">2 to 6 years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">6 to 8 years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">8 to 10 years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">10+ years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">2 to 4 years</a> </li>
                                                                            <li> <a href="#"> <strong> Combo Packs</strong> </a> </li>
                                                                            <li> <a href="#"> <strong> On Sale- Boys Clothes </strong> </a> </li>
                                                                            <li> <a href="#"> <strong> On Sale- Girls Clothes </strong> </a> </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 col-sm-6  menu-block">
                                                                    <div class="sub-list">
                                                                        <h2 class="title-2 sub-title-small">Shop by Colors</h2>
                                                                        <ul>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Black</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Blue</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Green</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Red</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Orange</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Pink</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">White</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">All</a> </li>
                                                                        </ul>
                                                                    </div>
                                                                </div> 
                                                                <div class="col-md-3 col-sm-6  menu-block menu-block-img no-padding">
                                                                    <div class="title-wrap">
                                                                        <h2 class="section-title">
                                                                            <span>
                                                                                <span class="funky-font blue-tag">Sale </span> 
                                                                                <span class="italic-font">Today Deal</span>
                                                                            </span>
                                                                        </h2>                                                                   
                                                                        <h3 class="pink-color">Up To <strong> 30% </strong> Off</h3>      
                                                                        <hr class="dash-divider-small">
                                                                        <a href="#" class="blue-color title-link"> Shop Now <i class="fa fa-caret-right"></i> </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="girls">
                                                            <div class="block-bg">
                                                                <div class="col-md-3 col-sm-6  menu-block">
                                                                    <div class="sub-list">
                                                                        <h2 class="title-2 sub-title-small">Shop by Category</h2>                                                                
                                                                        <ul>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">ShirtsT-Shirts</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Pajamas</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Onesies & Rompers</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Party Wear</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Kurta & Dhoti Sets</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Night Wear</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Inner Wear</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Theme Costumes</a> </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 col-sm-6  menu-block">
                                                                    <div class="sub-list">
                                                                        <h2 class="title-2 sub-title-small">Shop by Age</h2>
                                                                        <ul>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">2 to 4 years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">2 to 6 years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">6 to 8 years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">8 to 10 years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">10+ years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">2 to 4 years</a> </li>
                                                                            <li> <a href="#"> <strong> Combo Packs</strong> </a> </li>
                                                                            <li> <a href="#"> <strong> On Sale- Boys Clothes </strong> </a> </li>
                                                                            <li> <a href="#"> <strong> On Sale- Girls Clothes </strong> </a> </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 col-sm-6  menu-block">
                                                                    <div class="sub-list">
                                                                        <h2 class="title-2 sub-title-small">Shop by Colors</h2>
                                                                        <ul>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Black</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Blue</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Green</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Red</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Orange</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Pink</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">White</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">All</a> </li>
                                                                        </ul>
                                                                    </div>
                                                                </div> 
                                                                <div class="col-md-3 col-sm-6  menu-block  menu-block-img no-padding">
                                                                    <div class="title-wrap">
                                                                        <h2 class="section-title">
                                                                            <span>
                                                                                <span class="funky-font blue-tag">Sale </span> 
                                                                                <span class="italic-font">Today Deal</span>
                                                                            </span>
                                                                        </h2>                                                                   
                                                                        <h3 class="pink-color">Up To <strong> 30% </strong> Off</h3>      
                                                                        <hr class="dash-divider-small">
                                                                        <a href="#" class="blue-color title-link"> Shop Now <i class="fa fa-caret-right"></i> </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade  active in" id="boys">
                                                            <div class="block-bg">
                                                                <div class="col-md-3 col-sm-6  menu-block">
                                                                    <div class="sub-list">
                                                                        <h2 class="title-2 sub-title-small">Shop by Category</h2>                                                                
                                                                        <ul>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">ShirtsT-Shirts</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Pajamas</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Onesies & Rompers</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Party Wear</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Kurta & Dhoti Sets</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Night Wear</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Inner Wear</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Theme Costumes</a> </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 col-sm-6  menu-block">
                                                                    <div class="sub-list">
                                                                        <h2 class="title-2 sub-title-small">Shop by Age</h2>
                                                                        <ul>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">2 to 4 years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">2 to 6 years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">6 to 8 years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">8 to 10 years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">10+ years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">2 to 4 years</a> </li>
                                                                            <li> <a href="#"> <strong> Combo Packs</strong> </a> </li>
                                                                            <li> <a href="#"> <strong> On Sale- Boys Clothes </strong> </a> </li>
                                                                            <li> <a href="#"> <strong> On Sale- Girls Clothes </strong> </a> </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 col-sm-6  menu-block">
                                                                    <div class="sub-list">
                                                                        <h2 class="title-2 sub-title-small">Shop by Colors</h2>
                                                                        <ul>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Black</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Blue</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Green</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Red</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Orange</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Pink</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">White</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">All</a> </li>
                                                                        </ul>
                                                                    </div>
                                                                </div> 
                                                                <div class="col-md-3 col-sm-6  menu-block  menu-block-img no-padding">
                                                                    <div class="title-wrap">
                                                                        <h2 class="section-title">
                                                                            <span>
                                                                                <span class="funky-font blue-tag">Sale </span> 
                                                                                <span class="italic-font">Today Deal</span>
                                                                            </span>
                                                                        </h2>                                                                   
                                                                        <h3 class="pink-color">Up To <strong> 30% </strong> Off</h3>      
                                                                        <hr class="dash-divider-small">
                                                                        <a href="#" class="blue-color title-link"> Shop Now <i class="fa fa-caret-right"></i> </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                        <div class="tab-pane fade" id="new-arrivals">
                                                            <div class="block-bg">
                                                                <div class="col-md-3 col-sm-6  menu-block">
                                                                    <div class="sub-list">
                                                                        <h2 class="title-2 sub-title-small">Shop by Category</h2>                                                                
                                                                        <ul>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">ShirtsT-Shirts</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Pajamas</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Onesies & Rompers</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Party Wear</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Kurta & Dhoti Sets</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Night Wear</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Inner Wear</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Theme Costumes</a> </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 col-sm-6  menu-block">
                                                                    <div class="sub-list">
                                                                        <h2 class="title-2 sub-title-small">Shop by Age</h2>
                                                                        <ul>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">2 to 4 years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">2 to 6 years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">6 to 8 years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">8 to 10 years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">10+ years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">2 to 4 years</a> </li>
                                                                            <li> <a href="#"> <strong> Combo Packs</strong> </a> </li>
                                                                            <li> <a href="#"> <strong> On Sale- Boys Clothes </strong> </a> </li>
                                                                            <li> <a href="#"> <strong> On Sale- Girls Clothes </strong> </a> </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 col-sm-6  menu-block">
                                                                    <div class="sub-list">
                                                                        <h2 class="title-2 sub-title-small">Shop by Colors</h2>
                                                                        <ul>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Black</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Blue</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Green</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Red</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Orange</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Pink</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">White</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">All</a> </li>
                                                                        </ul>
                                                                    </div>
                                                                </div> 
                                                                <div class="col-md-3 col-sm-6  menu-block  menu-block-img no-padding">
                                                                    <div class="title-wrap">
                                                                        <h2 class="section-title">
                                                                            <span>
                                                                                <span class="funky-font blue-tag">Sale </span> 
                                                                                <span class="italic-font">Today Deal</span>
                                                                            </span>
                                                                        </h2>                                                                   
                                                                        <h3 class="pink-color">Up To <strong> 30% </strong> Off</h3>      
                                                                        <hr class="dash-divider-small">
                                                                        <a href="#" class="blue-color title-link"> Shop Now <i class="fa fa-caret-right"></i> </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="fashion">
                                                            <div class="block-bg">
                                                                <div class="col-md-3 col-sm-6  menu-block">
                                                                    <div class="sub-list">
                                                                        <h2 class="title-2 sub-title-small">Shop by Category</h2>                                                                
                                                                        <ul>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">ShirtsT-Shirts</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Pajamas</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Onesies & Rompers</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Party Wear</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Kurta & Dhoti Sets</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Night Wear</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Inner Wear</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Theme Costumes</a> </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 col-sm-6  menu-block">
                                                                    <div class="sub-list">
                                                                        <h2 class="title-2 sub-title-small">Shop by Age</h2>
                                                                        <ul>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">2 to 4 years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">2 to 6 years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">6 to 8 years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">8 to 10 years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">10+ years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">2 to 4 years</a> </li>
                                                                            <li> <a href="#"> <strong> Combo Packs</strong> </a> </li>
                                                                            <li> <a href="#"> <strong> On Sale- Boys Clothes </strong> </a> </li>
                                                                            <li> <a href="#"> <strong> On Sale- Girls Clothes </strong> </a> </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 col-sm-6  menu-block">
                                                                    <div class="sub-list">
                                                                        <h2 class="title-2 sub-title-small">Shop by Colors</h2>
                                                                        <ul>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Black</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Blue</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Green</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Red</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Orange</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Pink</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">White</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">All</a> </li>
                                                                        </ul>
                                                                    </div>
                                                                </div> 
                                                                <div class="col-md-3 col-sm-6  menu-block  menu-block-img no-padding">
                                                                    <div class="title-wrap">
                                                                        <h2 class="section-title">
                                                                            <span>
                                                                                <span class="funky-font blue-tag">Sale </span> 
                                                                                <span class="italic-font">Today Deal</span>
                                                                            </span>
                                                                        </h2>                                                                   
                                                                        <h3 class="pink-color">Up To <strong> 30% </strong> Off</h3>      
                                                                        <hr class="dash-divider-small">
                                                                        <a href="#" class="blue-color title-link"> Shop Now <i class="fa fa-caret-right"></i> </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="accessories">
                                                            <div class="block-bg">
                                                                <div class="col-md-3 col-sm-6  menu-block">
                                                                    <div class="sub-list">
                                                                        <h2 class="title-2 sub-title-small">Shop by Category</h2>                                                                
                                                                        <ul>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">ShirtsT-Shirts</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Pajamas</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Onesies & Rompers</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Party Wear</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Kurta & Dhoti Sets</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Night Wear</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Inner Wear</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Theme Costumes</a> </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 col-sm-6  menu-block">
                                                                    <div class="sub-list">
                                                                        <h2 class="title-2 sub-title-small">Shop by Age</h2>
                                                                        <ul>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">2 to 4 years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">2 to 6 years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">6 to 8 years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">8 to 10 years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">10+ years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">2 to 4 years</a> </li>
                                                                            <li> <a href="#"> <strong> Combo Packs</strong> </a> </li>
                                                                            <li> <a href="#"> <strong> On Sale- Boys Clothes </strong> </a> </li>
                                                                            <li> <a href="#"> <strong> On Sale- Girls Clothes </strong> </a> </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 col-sm-6  menu-block">
                                                                    <div class="sub-list">
                                                                        <h2 class="title-2 sub-title-small">Shop by Colors</h2>
                                                                        <ul>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Black</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Blue</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Green</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Red</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Orange</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Pink</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">White</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">All</a> </li>
                                                                        </ul>
                                                                    </div>
                                                                </div> 
                                                                <div class="col-md-3 col-sm-6  menu-block  menu-block-img no-padding">
                                                                    <div class="title-wrap">
                                                                        <h2 class="section-title">
                                                                            <span>
                                                                                <span class="funky-font blue-tag">Sale </span> 
                                                                                <span class="italic-font">Today Deal</span>
                                                                            </span>
                                                                        </h2>                                                                   
                                                                        <h3 class="pink-color">Up To <strong> 30% </strong> Off</h3>      
                                                                        <hr class="dash-divider-small">
                                                                        <a href="#" class="blue-color title-link"> Shop Now <i class="fa fa-caret-right"></i> </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="specials">
                                                            <div class="block-bg">
                                                                <div class="col-md-3 col-sm-6">
                                                                    <div class="product-details">
                                                                        <div class="product-media">
                                                                            <span class="hover-image white-bg">
                                                                                <img src="assets/img/product/cat-7.png" alt="">
                                                                            </span>
                                                                            <img alt="product-img" src="assets/img/product/product1.png">
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
                                                                                <a href="#">Babyhug Frock Style Top And Leggings</a>

                                                                            </div>
                                                                            <div class="product-price">
                                                                                <h4 class="pink-btn-small"> $50.00 </h4>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 col-sm-6">
                                                                    <div class="product-details">
                                                                        <div class="product-media">
                                                                            <span class="hover-image white-bg">
                                                                                <img src="assets/img/product/cat-7.png" alt="">
                                                                            </span>
                                                                            <img alt="product-img" src="assets/img/product/product2.png">                                                                            
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
                                                                                <a href="#">Babyhug Frock Style Top And Leggings</a>

                                                                            </div>
                                                                            <div class="product-price">
                                                                                <h4 class="pink-btn-small"> $50.00 </h4>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 col-sm-6">
                                                                    <div class="product-details">
                                                                        <div class="product-media">
                                                                            <span class="hover-image white-bg">
                                                                                <img src="assets/img/product/cat-7.png" alt="">
                                                                            </span>
                                                                            <img alt="product-img" src="assets/img/product/product3.png">
                                                                            <div class="product-new">
                                                                                <div class="green-new-tag new-tag">
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
                                                                                <a href="#">Babyhug Frock Style Top And Leggings</a>

                                                                            </div>
                                                                            <div class="product-price">
                                                                                <h4 class="pink-btn-small"> $50.00 </h4>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div> 
                                                                <div class="col-md-3 col-sm-6">
                                                                    <div class="product-details">
                                                                        <div class="product-media">
                                                                            <span class="hover-image white-bg">
                                                                                <img src="assets/img/product/cat-7.png" alt="">
                                                                            </span>
                                                                            <img alt="product-img" src="assets/img/product/product4.png">

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
                                                                                <a href="#">Babyhug Frock Style Top And Leggings</a>

                                                                            </div>
                                                                            <div class="product-price">
                                                                                <h4 class="pink-btn-small"> $50.00 </h4>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>				
                                        </li>                                      
                                        <li><a href="#">Footwear</a></li>
                                        <li><a href="#">Toy & Books</a></li>
                                        <li><a href="#">Care & Feeding</a></li>
                                        <li><a href="#">Baby Gear & Nursery</a></li>
                                        <li><a href="#">Moms & Maternity</a></li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" >Gifts <span class="caret"></span></a>
                                            <ul class="dropdown-menu ">
                                                <li><a href="#">Gift for Babies </a></li>
                                                <li><a href="#">Gift for Kids</a></li>
                                                <li><a href="#">Clothes</a></li>
                                                <li><a href="#">Toys & Gaming</a></li>
                                                <li><a href="#">Accessories</a></li>
                                                <li><a href="#">Nursery</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Offers</a></li>
                                        <li><a href="shopping-cart.html">Stores</a></li>   
                                        <li class="dropdown mega-dropdown active">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <span class="caret"></span></a>				
                                            <div class="dropdown-menu mega-dropdown-menu">
                                                <div class="block-bg  light-bg">
                                                    <div class="col-md-3 col-sm-6  menu-block">
                                                        <div class="sub-list">
                                                            <h2 class="title-2 sub-title-small">Product Categories</h2>
                                                            <ul>
                                                                <li> <i class="fa fa-angle-right pink-color"></i> <a href="categories-listing.html">Category Listing</a> </li>                                                                     <li> <i class="fa fa-angle-right pink-color"></i> <a href="product-grid-fullwidth.html">Category Grid View Full Width</a> </li>
                                                                <li> <i class="fa fa-angle-right pink-color"></i> <a href="product-grid-rightsidebar.html">Category Grid View Right Sidebar</a> </li>
                                                                <li> <i class="fa fa-angle-right pink-color"></i> <a href="product-grid-leftsidebar.html">Category Grid View Left Sidebar</a> </li>
                                                                <li> <i class="fa fa-angle-right pink-color"></i> <a href="product-list-fullwidth.html">Category List View Full Width</a> </li>
                                                                <li> <i class="fa fa-angle-right pink-color"></i> <a href="product-list-rightsidebar.html">Category List View Right Sidebar</a> </li>
                                                                <li> <i class="fa fa-angle-right pink-color"></i> <a href="product-list-leftsidebar.html">Category List View Left Sidebar</a> </li>                                                               
                                                            </ul>
                                                        </div>
                                                    </div> 
                                                    <div class="col-md-3 col-sm-6  menu-block">
                                                        <div class="sub-list">
                                                            <h2 class="title-2 sub-title-small">Single Product</h2>
                                                            <ul>
                                                                <li> <i class="fa fa-angle-right pink-color"></i> <a href="product-single-fullwidth.html">Single Product Full Width</a> </li>
                                                                <li> <i class="fa fa-angle-right pink-color"></i> <a href="product-single-hover.html">Single Product Hover</a> </li>
                                                                <li> <i class="fa fa-angle-right pink-color"></i> <a href="product-single-rightsidebar.html">Single Product Right Filter</a> </li>
                                                                <li> <i class="fa fa-angle-right pink-color"></i> <a href="product-single-leftsidebar.html">Single Product Left Filter</a> </li>                                                                
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-6  menu-block">
                                                        <div class="sub-list">
                                                            <h2 class="title-2 sub-title-small">Pages</h2>                                                                
                                                            <ul>
                                                                <li> <i class="fa fa-angle-right pink-color"></i> <a href="about-us.html">About Us</a> </li>
                                                                <li> <i class="fa fa-angle-right pink-color"></i> <a href="shopping-cart.html">Shopping Cart</a> </li>
                                                                <li> <i class="fa fa-angle-right pink-color"></i> <a href="check-out.html">Checkout</a> </li>                                                                                                                                       
                                                                <li> <i class="fa fa-angle-right pink-color"></i> <a href="shortcodes.html">Shortcodes</a> </li>                                                                 <li> <i class="fa fa-angle-right pink-color"></i> <a href="typography.html">Typography</a> </li>
                                                                <li> <i class="fa fa-angle-right pink-color"></i> <a href="coming-soon.html">Coming Soon</a> </li>
                                                                <li> <i class="fa fa-angle-right pink-color"></i> <a href="404.html">Error Page</a> </li> 
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-6  menu-block">
                                                        <div class="sub-list">
                                                            <h2 class="title-2 sub-title-small">My Account</h2>
                                                            <ul>
                                                                <li>  <i class="fa fa-angle-right pink-color"></i> <a href="my-account.html">My Account</a></li>                                                
                                                                <li>  <i class="fa fa-angle-right pink-color"></i> <a href="account-info.html"> Account Information </a></li>                                                
                                                                <li>  <i class="fa fa-angle-right pink-color"></i> <a href="cng-pw.html">Change Password</a></li>
                                                                <li>  <i class="fa fa-angle-right pink-color"></i> <a href="address-book.html">Address Books</a></li>
                                                                <li>  <i class="fa fa-angle-right pink-color"></i> <a href="order-history.html">Order History</a></li>
                                                                <li>  <i class="fa fa-angle-right pink-color"></i> <a href="review-rating.html">Reviews and Ratings</a></li>
                                                                <li>  <i class="fa fa-angle-right pink-color"></i> <a href="return.html">Returns Requests</a></li>
                                                                <li>  <i class="fa fa-angle-right pink-color"></i> <a href="newsletter.html">Newsletter</a></li>
                                                                <li>  <i class="fa fa-angle-right pink-color"></i> <a href="myaccount-leftsidebar.html">Left Sidebar</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>                                              
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </article>

                </section> 
            </header>
            <!-- /Header -->