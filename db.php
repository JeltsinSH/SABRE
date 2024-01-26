<?php

$host="localhost";
$user="root";
$password="";
$dbname="libreria";

	$conn = new mysqli($host, $user, $password, $dbname);

	if($conn->connect_error){
		die("ERROR: ".$conn->connect_error());
	}	
?>