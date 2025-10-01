<?php
require_once("sessionLib.php");
require_once("commonLib.php");
$error = [];
$testLogin = ["admin", "s3cur3P@ssw!rd"]; //TODO: DON'T PUSH THIS TO PRODUCTION!!
if (!isset($_POST['username']) || !isset($_POST['password'])) {
	array_push($error, "Bad form submission: nonexistant! (Bad redirect?)");
} else {
	if (empty($_POST['username'])) {
		array_push($error, "Bad login: No Username"); //This one is left as fully informative, since telling someone they didn't even try filling out the form properly doesn't reveal anything (except that there can't be a user with the name "", which is assumed regardless)
	} elseif (!($_POST['username'] === $testLogin[0])) { //TODO: Implement username db lookup?
		array_push($error, "Bad login: Unknown user or wrong password");
	} else {
		if (empty($_POST['password']) || !($_POST['password'] === $testLogin[1])) { //Separated out in case actual auth flow is implemented
			array_push($error, "Bad login: Unknown user or wrong password");
		}
	}
}
if (count($error) > 0) {
	/*
	printSimpleHead("Login Error!!!");
	foreach ($error as $errEntry) { //I set this up to take multiple potetial errors, but with proper login flow only one should ever actually occur.
		print "<p>".$errEntry."</p>\n";
	}
	printSimpleEnd();
	die();
	*/
	$_SESSION['logErr'] = $error[0]; //The login flow I use only ever spits out one error at a time
	die(header("Location: https://cnmtsrv2.uwsp.edu/~jrobi774/"));
}
//Login has passed, succeed & go to account
$_SESSION['loginSuccess'] = true;
die(header("Location: https://cnmtsrv2.uwsp.edu/~jrobi774/account.php"));