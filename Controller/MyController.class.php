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

	public static function error($error) {
		switch($error){
			case 200:
				$errorMessage = "Vos identifiants sont incorrects";
				break;
			default:
				$errorMessage = "Un erreur inconnue s'est produite";
				break;	
		}

		require 'errorMessage.tpl';
	}
}

?>