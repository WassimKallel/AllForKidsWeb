<?php

$GLOBALS["AllForKids"] = array();

	/**
	* Configuration file
	*
	* This should be the only file you need to edit in, regarding the original script.
	* Please provide your MySQL login information below.
	*/
$GLOBALS["AllForKids"]["mysql_hostname"] = "pma.allforkids.ml";
$GLOBALS["AllForKids"]["mysql_username"] = "wassim";
$GLOBALS["AllForKids"]["mysql_password"] = "Lpd*de7W";
$GLOBALS["AllForKids"]["mysql_database"] = "from_scratch";
$GLOBALS["AllForKids"]["platform_directory"] = "/AllForKidsWeb/";
$GLOBALS["AllForKids"]["platform_host"] = "localhost";
// must end with '/'
$GLOBALS["AllForKids"]["data_directory"] = "/opt/lampp/htdocs/AllForKidsWeb/data/";
$GLOBALS["AllForKids"]["protocol"] = "http";
$GLOBALS["AllForKids"]["data_folder"] = $GLOBALS["AllForKids"]["protocol"]."://".$GLOBALS["AllForKids"]["platform_host"] . '/AllForKidsWeb/data/';
$GLOBALS["AllForKids"]["home_url"] = $GLOBALS["AllForKids"]["protocol"]."://".$GLOBALS["AllForKids"]["platform_host"].$GLOBALS["AllForKids"]["platform_directory"];


