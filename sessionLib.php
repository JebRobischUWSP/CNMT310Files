<?php
session_start();

define("PG_INDEX","index.php");
define("PG_ACCOUNTHOME","account.php");
define("PG_LOGIN","login.php");
define("PG_LOGOUT","logout.php");

function svar_check($ses, $var, $value = null) {
	if (!isset($ses[$var])) { //If session doesn't have $var...
		return [false, 0];
	} elseif (is_null($ses[$value])) { //If session variable exists but no value to check against...
		return [true, 0];
	} elseif ($ses[$value] === $value) { //If both defined & session variable matches value...
		return [true, 1];
	} else { //If both defined & session variable doesn't match value...
		return [false, 1];
	}
}
?>