<?php

$GLOBALS["AllForKids"] = array();

	/**
	* Configuration file
	*
	* This should be the only file you need to edit in, regarding the original script.
	* Please provide your MySQL login information below.
	*/
$GLOBALS["AllForKids"]["mysql_hostname"] = "localhost";
$GLOBALS["AllForKids"]["mysql_username"] = "root";
$GLOBALS["AllForKids"]["mysql_password"] = "";
$GLOBALS["AllForKids"]["mysql_database"] = "esprit";
$GLOBALS["AllForKids"]["platform_directory"] = "/AllForKidsWeb/";
$GLOBALS["AllForKids"]["platform_host"] = "localhost";
$GLOBALS["AllForKids"]["data_directory"] = "/AllForKidsWeb/data/";
$GLOBALS["AllForKids"]["protocol"] = "http";
$GLOBALS["AllForKids"]["data_url"] = $GLOBALS["AllForKids"]["protocol"]."://".$GLOBALS["AllForKids"]["platform_host"] .$GLOBALS["AllForKids"]["data_directory"];
$GLOBALS["AllForKids"]["home_url"] = $GLOBALS["AllForKids"]["protocol"]."://".$GLOBALS["AllForKids"]["platform_host"].$GLOBALS["AllForKids"]["platform_directory"];


