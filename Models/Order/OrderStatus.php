
<?php

use \Core\ORM\Model;
class OrderStatus extends Enum {

    const ShoppingCart = 0;
    const Checkout = 1;
    const Shipping = 2;
    const Payment = 3;
    const PaymentComplete = 4;
    const PendingVerification = 5;
    const Canceled = 6;
    const Refused = 7;
    
        
    public static function keys()
    {
        return array_keys(static::toArray());
    }


}

?>