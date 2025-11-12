<?php
require_once(__DIR__."/classes/WebServiceClient.php");

$backendError = "";

$classClient = new WebServiceClient("https://cnmt310.classconvo.com/classreg/");
$classClient->setPostFields(array(
	"apikey"=>"api44",
	"apihash"=>"fCXnJ5E8iA",
	"action" => "listcourses",
	"data" => array()
));
$requestResult = $classClient->send();

$result = json_decode($requestResult);
if (json_last_error() !== JSON_ERROR_NONE) {
	$backendError = "Error: Class list didn't return json!";
} else if ($result->result === "Error") {
	$backendError = "Error: ".$result->data->message;
}

if (!empty($backendError)) {
	print $backendError;
} else {
	var_dump($result);
}

?>