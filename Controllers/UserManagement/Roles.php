
<?php
use \Core\Enum; 
class Role extends Enum {

    const __default = self::User;
    const User = 0;
    const Analyser = 1;
    const CommunityManager = 2;
    const Administrator = 3;
        
}

?>