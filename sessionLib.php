<?php
session_start();

function svar_check($var, $value = null) {
	if (!isset($_SESSION[$var])) { //If session doesn't have $var...
		return [false, 0];
	} elseif (is_null($_SESSION[$value])) { //If session variable exists but no value to check against...
		return [true, 0];
	} elseif ($_SESSION[$value] === $value) { //If both defined & session variable matches value...
		return [true, 1];
	} else { //If both defined & session variable doesn't match value...
		return [false, 1];
	}
}
?>