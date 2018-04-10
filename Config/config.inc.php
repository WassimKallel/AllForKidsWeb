<?php

$GLOBALS["tachyon_config"] = array();

	/**
	* Configuration file
	*
	* This should be the only file you need to edit in, regarding the original script.
	* Please provide your MySQL login information below.
	*/
$GLOBALS["tachyon_config"]["mysql_hostname"] = "localhost";
$GLOBALS["tachyon_config"]["mysql_username"] = "root";
$GLOBALS["tachyon_config"]["mysql_password"] = "";
$GLOBALS["tachyon_config"]["mysql_database"] = "esprit";
$GLOBALS["tachyon_config"]["platform_directory"] = "/AllForKidsWeb/";
$GLOBALS["tachyon_config"]["platform_host"] = "localhost";
$GLOBALS["tachyon_config"]["session_name"] = "GMCP";
$GLOBALS["tachyon_config"]["data_directory"] = "/AllForKidsWeb/data/";
$GLOBALS["tachyon_config"]["protocol"] = "http";
$GLOBALS["tachyon_config"]["data_url"] = $GLOBALS["tachyon_config"]["protocol"]."://".$GLOBALS["tachyon_config"]["platform_host"] .$GLOBALS["tachyon_config"]["data_directory"];
$GLOBALS["tachyon_config"]["home_url"] = $GLOBALS["tachyon_config"]["protocol"]."://".$GLOBALS["tachyon_config"]["platform_host"].$GLOBALS["tachyon_config"]["platform_directory"];


