<?php

use \Core\ORM\DataMappingManager;
use \Core\ORM\Model;
define("ROOT_DIR", dirname(__FILE__));
include "Config/Init.inc.php";
DataMappingManager::initializeMapper();
include "Models/User.php";

print '<pre>';
var_dump( User::retrieveByPK(2));
print '</pre>';