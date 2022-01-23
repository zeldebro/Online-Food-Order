<?php

function Connect()
{
	$dbhost = "localhost";
	$dbuser = "Raghu";
	$dbpass = "root123";
	$dbname = "foodorder";

	//Create Connection
	$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);

	return $conn;
}
?>