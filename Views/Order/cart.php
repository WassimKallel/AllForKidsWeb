
<?php
$line_items = array();
$shopping_cart = ShoppingCartController::getShoppingCartOrder();
if ($shopping_cart){
    $line_items = ShoppingCartController::getLineItems($shopping_cart->id);
    include_once CONTROLLERS . "/StoreManagement/ProductController.php";
}   
$line_items_count = count($line_items);
$total = 0;     

?>
       <!-- Header shopping cart -->
           
                                <?php 
                                    if($line_items_count > 0) {
                                ?>     
                                        <table class="cart-table">
                                            <tbody>
                                            <?php foreach($line_items as $line_item) {
                                                $product = ProductController::getProduct($line_item->product_id);
                                                $total = $product->unit_price * $line_item->quantity ;
                                                ?>
                                                <tr id="line_<?= $line_item->id ?>">
                                                    <td>
                                                        <div class="product-media">                                                            
                                                            <a href="#">  <img alt="product-img" src="<?= DATA_URL . $product->image ?>"></a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="product-content">                                                     
                                                            <div class="product-name">
                                                                <a href="product?id=<?= $product->id ?>"><?= $product->name ?></a>
                                                            </div>
                                                            <div class="product-price">
                                                                <h5 class="price"><b> <?= $product->unit_price ?>*<?= $line_item->quantity ?> DT HT </b></h5>
                                                                <a onclick="deleteLineItem('line_<?= $line_item->id ?>',<?= $line_item->id ?>); return" class="delete fa fa-close">  </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>      
                                    <?php }  ?>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td>
                                                        <div class="sub-total">
                                                            <span class="title">Total:</span>
                                                            <span class="amount"> <b> <?= $total ?> DT HT </b> </span>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    <?php  } ?>
                                    
                            