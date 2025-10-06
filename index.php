<?php
require_once("sessionLib.php");
require_once("commonLib.php");

//Auto-redirect
if (isset($_SESSION['loginSuccess']) && $_SESSION['loginSuccess']) {
	die(header("Location: ".PG_ACCOUNTHOME));
}

//Load actual page content
$title = "Very very cool site";
$name = "Jeb";
$docContent = [
	["<h1> HELLO WORLD!!!1! </h1>\n",
	"<p>Hey ".$name.", today is ".date("j-n-Y")."</p>\n"],
	["<form action='login-process.php' method='POST'>\n",
	"User: <input type='text' name='username'><br>\n",
	"Pass: <input type='password' name='password'><br>\n",
	"<input type='submit' name='send_auth'>\n",
	"</form>\n"]
];

printSimpleHead($title);
printLines($docContent[0]);
if (isset($_SESSION['logErr'])) {
	print "<p>" . $_SESSION['logErr'] . "</p>\n";
	unset($_SESSION['logErr']);
}
printLines($docContent[1]);
printSimpleEnd();
/*
"<p>The server's variable list is as follows: ";
foreach ($_SERVER as $k => $v) {
	if ($k === "SERVER_SIGNATURE") {
		"<br>Key [".$k."] has been ommitted due to breaking the html :(";
	} else {
		"<br>Key [".$k."] has value '".$v."'";
	}
}
print"</p>\n";
*/
?>