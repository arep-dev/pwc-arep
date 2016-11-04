<?php
	
	if(!isset($_COOKIE['AUTH'])) {
		header('Location: login.php');
	}
?>