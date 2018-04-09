<?php

use \Core\ORM\DataBaseManager;
use \Core\ORM\Model;

define("ROOT_DIR", dirname(__FILE__));
include "Config/Init.inc.php";
// initialize 
DataBaseManager::initializeMapper();
include "Mo²dels/UserManagement/User.php";
print '<pre>';

var_dump( User::all());
    $s = new User();
    $s->LastName = "amine";
    $s->FirstName = "Troudi";
    $s->save();
print '</pre>'; 