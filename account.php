<?php
require_once("sessionLib.php");
require_once("commonLib.php");

if (!isset($_SESSION['loginSuccess']) || !$_SESSION['loginSuccess']) { //In case someone accessed the account page without suceeding login
	$_SESSION['logErr'] = "Unauthorized: Didn't log in or session ended. Please log in again.";
	die(header("Location: https://cnmtsrv2.uwsp.edu/~jrobi774/"));
}

printSimpleHead("Your Account");
print "<p>You made it to your account page! :D<br>
	...or, well, the account page shared between all users.<br>
	<br>
	Accessing this page will log you out, for debugging purposes.</p>\n";
unset($_SESSION['loginSuccess']); //Only log someone out after they've been served the disclaimer, since it isn't critical
printSimpleEnd();
?>