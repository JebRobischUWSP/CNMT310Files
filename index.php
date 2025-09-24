<?php
$title = "Very very cool site";
$name = "Jeb";
print "<!doctype html>\n";
print "<html lang=\"en\">\n";
print "<head>\n";
print "<title>". $title ."</title>\n";
print "</head>\n";
print "<body>\n";
print "<h1> HELLO WORLD!!!1! </h1>\n";
print "<p>Hey ".$name.", today is ".date("j-n-Y")."</p>\n";
/*
print "<p>The server's variable list is as follows: ";
foreach ($_SERVER as $k => $v) {
	if ($k === "SERVER_SIGNATURE") {
		print "<br>Key [".$k."] has been ommitted due to breaking the html :(";
	} else {
		print "<br>Key [".$k."] has value '".$v."'";
	}
}
print"</p>\n";
*/
print "<form action='login.php' method='POST'>\n";
print "User: <input type='text' name='username'><br>\n";
print "Pass: <input type='password' name='password'><br>\n";
print "<input type='submit' name='send_auth'>\n";
print "</form>\n";

print "</body>\n";
print "</html>\n";
?>