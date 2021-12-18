<?php 
session_start();

class Session {

	function setSession(string $key, string $value) {
		$_SESSION[$key] = $value;
	}

	function getSession(string $key) {
		if (isset($_SESSION[$key])) {
			return $_SESSION[$key];
		}
		return false;
	}

	function clearSession(string $key) {
		unset($_SESSION[$key]);
	}

}

$session = new Session();

