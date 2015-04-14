<?php
///// Host ////////////

$dbHost = "mysql6.000webhost.com";
$dbName = "a3084245_test";
$dbUser = "a3084245_test";
$dbPass = "k0lbasa"; 

mysql_connect($dbHost, $dbUser, $dbPass);
mysql_select_db($dbName) or die(mysql_error()." Could not select database");
?>