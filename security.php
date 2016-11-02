<?php
	
	if(!isset($_SESSION['AUTH'])) {
		header('Location: login');
	}

?>	