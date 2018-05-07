
<?php 
	include_once CONTROLLERS . "/OrderManagement/OrderController.php";
	include_once CONTROLLERS . "/OrderManagement/ShoppingCartController.php";
	include_once MODELS . "/Order/Order.php";
	$order = Order::retrieveByPK($_GET["order_id"]);
	$line_items = array();
    if (!empty($order) && !empty($order->customer_id)) {
        $line_items = ShoppingCartController::getLineItems($order->id);
		$customer = User::retrieveByPK($order->customer_id);
		if($order->shipping_method_id != 0) {
			$shipping_method_price = OrderController::getShippingMethod($order->shipping_method_id); 
		}else {
			$shipping_method_price = 0;
		}
    }
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
    		<div class="invoice-title">
    			<h2>Invoice</h2><h3 class="pull-right">Order # <?= $order->reference ?></h3>
    		</div>
    		<hr>
    		<div class="row">
    		
    			<div class="col-xs-6 ">
    				<address>
        			<strong>Shipped To:</strong><br>
    					<?= $customer->getFullName() ?><br>
    					<?= $customer->email ?>
    					<?= $order->delivery_address ?>
    				</address>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-xs-6">
    				<address>
    					<strong>Payment Method:</strong><br>
    					<?= $order->payment_method ?><br>

    				</address>
    			</div>
    			<div class="col-xs-6 text-right">
    				<address>
    					<strong>Order Date:</strong><br>
    					<?= $order->creation_date ?><br><br>
    				</address>
    			</div>
    		</div>
    	</div>
    </div>
    
    <div class="row">
    	<div class="col-md-12">
    		<div class="panel panel-default">
    			<div class="panel-heading">
    				<h3 class="panel-title"><strong>Order summary</strong></h3>
    			</div>
    			<div class="panel-body">
    				<div class="table-responsive">
    					<table class="table table-condensed">
    						<thead>
                                <tr>
        							<td><strong>Item</strong></td>
        							<td class="text-center"><strong>Unit Price</strong></td>
        							<td class="text-center"><strong>Quantity</strong></td>
        							<td class="text-center"><strong>Vat</strong></td>
        							<td class="text-right"><strong>Totals</strong></td>
                                </tr>
    						</thead>
    						<tbody>
    						<?php $total = 0 ;  foreach($line_items as $line_item) {
									$product = Product::retrieveByPK($line_item->product_id);
									$total += $line_item->total + ($line_item->total * $line_item->vat * 0.01);
								?>
    							<tr>
								
    								<td><?= $product->name ?></td>
    								<td class="text-center"><?= $line_item->total / $line_item->quantity ?></td>
    								<td class="text-center"><?= $line_item->quantity ?></td>
    								<td class="text-center"><?= $line_item->vat ?></td>
    								<td class="text-right"><?= $line_item->total + ($line_item->total * $line_item->vat * 0.01) ?> DT TTC</td>
    							</tr>
							<?php } ?>
    							<tr>
    								<td class="thick-line"></td>
    								<td class="thick-line"></td>
    								<td class="thick-line"></td>
    								<td class="thick-line text-center"><strong>Subtotal</strong></td>
    								<td class="thick-line text-right"><?= $total ?> DT TTC</td>
    							</tr>
    							<tr>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line text-center"><strong>Shipping</strong></td>
    								<td class="no-line text-right"><?= $shipping_method_price ?> DT </td>
    							</tr>
    							<tr>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line text-center"><strong>Total</strong></td>
    								<td class="no-line text-right"><?= $total + $shipping_method_price ?> DT TTC</td>
    							</tr>
    						</tbody>
    					</table>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
</div>