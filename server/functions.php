<?php

function send_response($code,$message) {
	$response["status_code"] = $code;
	$response["status_message"] = $message;

	$json = json_encode($response);
	echo $json;
	die();
}