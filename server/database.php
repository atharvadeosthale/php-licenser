<?php

// PHP Licenser Script
// Made by Atharva Deosthale

// This file contains Database details and creates a connection to it
// Use of mysqli is done instead of PDO or mysql
// Making a little changes, this program can work on mysql and PDO
$db["host"] = "localhost";
$db["user"] = "root";
$db["pass"] = "";
$db["name"] = "licenser";

// Initiate Connection
$conn = mysqli_connect($db["host"],$db["user"],$db["pass"],$db["name"]);

if(!$conn)
{
	die("Error connecting database");
}

?>
