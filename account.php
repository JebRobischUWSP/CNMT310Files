<?php
require_once("sessionLib.php");
require_once("commonLib.php");

if (!isset($_SESSION['loginSuccess']) || !($_SESSION['loginSuccess'] === true)) { //In case someone accessed the account page without suceeding login
	$_SESSION['logErr'] = "Unauthorized: Didn't log in or session ended. Please log in again.";
	die(header("Location: ".PG_INDEX));
}

printSimpleHead("Your Account");
print "<p>You made it to your account page! :D<br>
	...or, well, the account page shared between all users.<br>";
print "<a href=".PG_LOGOUT."><button>Logout</button></a>";
printSimpleEnd();
?>