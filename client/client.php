<?php

// PHP Licenser Script
// Made by Atharva Deosthale

// URL to send HTTP Requests to (master server)
$url = "http://localhost/licenser/server/server.php";

// Put the data into an array
$data = [
"license_key" => "license2",   // License Key goes here
"package_name" => "package2",     // Package name goes here
"domain_name" => "localhost"         // Use some kind of code to detect domain name, instead.
];

// convert the array so that it fits into HTTP Query
$datastring = http_build_query($data);

$ch = curl_init();

// Set cURL parameters
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $datastring);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// execute the HTTP Request and wait back for response
$result = curl_exec($ch);
// decode the received encoded JSON code
$response = json_decode($result, true);

// Authorize and act accordingly
if($response["status_code"] == "200")
{
	echo "You are Authorised to use this script.";
}
else
{
	echo "Error Authenticating License. Error code - ".$response["status_code"];
}

?>
