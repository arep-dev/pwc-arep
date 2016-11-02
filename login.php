<?php

	session_start();
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	// Loader des fichiers essentiels
	require 'loaderFile.php';

	// require login
	
	if($_SERVER['REQUEST_METHOD'] == "POST") {
		$username = htmlspecialchars($_POST['user']);
		$password = htmlspecialchars($_POST['password']);
		LoginController::getInstance()->connect($username, $password); 	
	}

?>
