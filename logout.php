<?php
require_once("sessionLib.php");

try {
	unset($_SESSION['loginSuccess']);
	$_SESSION = array();
	session_write_close();
} catch (Exception $e) {
	$_SESSION['logErr'] = "Issue clearing session: " . $e;
} finally {
	die(header("Location: ".PG_INDEX));
}
?>