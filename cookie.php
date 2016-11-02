<?php
	if(!isset($_COOKIE['AUTH'])) {
		header('Location: disconnect.php');
	}
?>