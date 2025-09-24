<?php
$error = [];
if (!isset($_POST['username']) || !isset($_POST['password'])) {
	array_push($error, "Bad form submission: nonexistant! (Bad redirect?)");
} else {
	if (empty($_POST['username'])) {
		array_push($error, "Bad form submission: No Username");
	}
	if (empty($_POST['username'])) {
		array_push($error, "Bad form submission: No Password");
	}
}
if (count($error) > 0) {
	foreach ($error as $errEntry) {
		print $errEntry."<br>";
	}
	die();
}

die();
print "<!doctype html>\n";
print "<html lang=\"en\">\n";
print "<head>\n";
print "<title>Login Time</title>\n";
print "</head>\n";
print "<body>\n";
print "</body>\n";
print "</html>\n";
?>