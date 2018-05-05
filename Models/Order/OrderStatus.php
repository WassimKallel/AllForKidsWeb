
<?php


use \Core\Enum; 
class OrderStatus extends Enum {

    const ShoppingCart = 0;
    const PaymentComplete = 1;
    const Canceled = 2;
    const Refused = 3;
    const Completed = 4;
    
        
    public static function keys()
    {
        return array_keys(static::toArray());
    }


}

?>