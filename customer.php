<?php
require_once("sessionLib.php");
require_once("commonLib.php");

if (!isset($_SESSION['loginSuccess']) || !($_SESSION['loginSuccess'] === true)) { //In case someone accessed the account page without suceeding login
	$_SESSION['logErr'] = "Unauthorized: Didn't log in or session ended. Please log in again.";
	die(header("Location: ".PG_INDEX));
}

printSimpleHead("Customer Portal", "Customer Portal", ["basic_style.css"], [[PG_LOGOUT, "Logout"],[PG_ACCOUNTMGMT, "Account"]]);
print "<h1>Welcome to the Customer Portal!</h1>";
printSimpleEnd();
?>