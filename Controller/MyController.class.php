<?php

class MyController {
	private static $instance;
	public static $bdd;

	public function __construct() {

	}	

	public static function getInstance() {
		$class = get_called_class();
		if($class::$instance == null) {
			$class::$instance == new $class();
		}

		return $class::$instance;
	}
}

?>