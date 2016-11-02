<?php

	MyController::$db = new PDO('mysql:host=142.4.214.101;dbname=PWC-AREP', 'arep_CATB', 'arep-sa');
	MyController::$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

?>
