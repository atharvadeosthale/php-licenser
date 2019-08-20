<?php

// Including the Database and the Function files
require_once "database.php";
require_once "functions.php"; 

// Tell the Client that the response received is of JSON type
header("Content-Type: application/json");

if(!isset($_POST["license_key"]))
{
	send_response("404","nolicense");
}

$license_key = $_POST["license_key"];

if(!isset($_POST["package_name"]))
{
	send_response("404","nopackage");
}

$package_name = $_POST["package_name"];

if(!isset($_POST["domain_name"]))
{
	send_response("404","nodomain");
}

$domain_name = $_POST["domain_name"];
 
// SQL Query to validate the License provided by the client
$sql = "SELECT * FROM license_keys WHERE license_key='$license_key' AND package_name='$package_name' AND domain_name='$domain_name';";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);

// Authenticate and send response accordingly
if($count == 1)
{
	send_response("200","Authorised");
}
else
{
	send_response("403","Unauthorised");
}

// End of file
?>
