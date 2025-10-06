<?php
require_once("sessionLib.php");

unset($_SESSION['loginSuccess']);
$_SESSION = array();
session_write_close();

die(header("Location: ".PG_INDEX));
?>