<?php AuthenticationController::restricted();?>
<?php $user = AuthenticationController::getCurrentUser();
    $orders = Order::retrieveByField("customer_id", $user->id);
?>

<?php include VIEWS .  "/partial/header.php"; ?>
    <body id="home" class="wide">
        <!-- WRAPPER -->
        <main class="wrapper"> 

<?php include VIEWS .  "/partial/menu.php"; ?>
            <!-- CONTENT AREA -->

            <!-- Breadcrumbs Start -->
            <section class="breadcrumb-bg margin-bottom-80">     
                <span class="gray-color-mask color-mask"></span>
                <div class="theme-container container">
                    <div class="site-breadcrumb relative-block space-75">


                        <h3 class="sub-title"> Order History </h3>
                        <hr class="dash-divider">

                    </div>  
                </div>
            </section>
            <!-- / Breadcrumbs Ends -->

      
      <article  class="container theme-container"> 
                <div class="row">
                    <!-- Posts Start -->
                    <aside class="col-md-12 col-sm-12 space-bottom-45">
                        <div class="title-wrap  text-center space-bottom-25">
                            <h2 class="section-title with-border">
                                <span class="white-bg">
                                    <span class="funky-font pink-tag">Order</span> 
                                    <span class="italic-font">History</span>
                                </span>
                            </h2>                                                          
                        </div>
                        <div class="account-details-wrap">
                            <div class="title-2 sub-title-small">  Your Order History </div>
                            <div class="light-bg default-box-shadow">
                                <table class="product-table">
                                    <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Delivered on</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($orders as $order) { 
                                            if($order->order_status == OrderStatus::PaymentComplete || $order->order_status  == OrderStatus::Completed) {
                                            ?>
                                        <tr>
                                            <td class="order-id"> <?= $order->reference ?> </td>
                                            <td class="diliver-date"> <?= $order->creation_date ?> </td>
                                            <td class="order-status">
                                                <a class="blue-btn btn" href="invoice?order_id=<?= $order->id ?>">View Invoice</a>
                                            </td>
                                        </tr>
<?php }} ?>
                                    </tbody>                               
                                </table>
                                <div class="continue-shopping">
                                    <div class="shp-btn">
                                        <a class="pink-btn btn" href="profile"> Back To Account </a>
                                    </div>                               
                                </div>
                            </div>
                        </div>                                                    
                    </aside>
                    <!-- Posts Ends -->                
                </div>
            </article>


  <?php include VIEWS . "/partial/footer.php"; ?>

    

        </main>


    </body>

</html>