
<?php
use \Core\Enum; 
class Roles extends Enum {

    const User = 0;
    const Analyser = 1;
    const CommunityManager = 2;
    const Administrator = 3;
        
    public static function keys()
    {
        return array_keys(static::toArray());
    }


}

?>