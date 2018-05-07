
<?php 
  
    if(isset($_POST["line_item_id"])) {
        ShoppingCartController::deleteLineItem($_POST["line_item_id"]);
    }
?>