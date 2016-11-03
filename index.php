<?php
	session_start();
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	// Loader des fichiers essentiels
	require 'loaderFile.php';

	// Check si l'utilisateur est déjà connecté, sinon le renvoi sur la page login
	require 'security.php';	

	// Check si le cookie de connexion est toujours présent sinon deconnecte l'utilisateur
	require 'cookie.php';

	if(isset($_GET['action'])) {

	}else{
		echo $twig->render('index.tpl', array(
    	));
	}	
?>