<?php
// database Connection
$hostname = "mysql104.unoeuro.com";
$username = "mathiasspiegelhauer_dk";
$password = "rEgwkhanzDGf";
$db =  "mathiasspiegelhauer_dk_db_webscript";
$conn = new mysqli($hostname,$username,$password,$db);
if($conn->connect_error){
die("connection error".$conn->connect_error);
}
session_start();
error_reporting('1');
?>
