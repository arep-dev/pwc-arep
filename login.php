<?php

	session_start();
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	// Loader des fichiers essentiels
	require 'loaderFile.php';

	// On charge la page de login
	echo $twig->render('login.tpl', array(
		
    ));

	if($_SERVER['REQUEST_METHOD'] == "POST") {
		$username = htmlspecialchars($_POST['username']);
		$password = htmlspecialchars($_POST['password']);
		LoginController::getInstance()->connect($username, $password); 	
	}

?>
