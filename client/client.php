<?php

$url = "http://localhost/licenser/server/server.php";

$data = [
"license_key" => "license2",   // License Key goes here
"package_name" => "package2",     // Package name goes here
"domain_name" => "localhost"         // Use some kind of code to detect domain name, instead.
];

$datastring = http_build_query($data);

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $datastring);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);
$response = json_decode($result, true);

if($response["status_code"] == "200")
{
	echo "You are Authorised to use this script.";
}
else
{
	echo "Error Authenticating License. Error code - ".$response["status_code"];
}

?>