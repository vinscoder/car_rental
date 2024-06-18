<?php
$host = "localhost";
$username= "root";
$password = "";
$database = "cars";

$link = mysqli_connect($host, $username, $password, $database);
if(!$link){
	die("ERROR: Could not connect. ".mysqli_connect_error()); 
}
?>