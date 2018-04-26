
<?php

use \Core\ORM\Model;
class OrderStatus extends Enum {

    const Cart = 0;
    const OnCheckout = 1;
    const OnShipping = 2;
    const OnPayment = 3;
    const PaymentComplete = 4;
    
    
        
    public static function keys()
    {
        return array_keys(static::toArray());
    }


}

?>