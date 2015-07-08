<?php
$strHost = "localhost";
$strDbName = "dbWebsite";
$strUsername = "root";
$strPassword = "";

$Database = new PDO("mysql:host=$strHost;$strDbName", $strUsername, $strPassword);

session_start();

?>