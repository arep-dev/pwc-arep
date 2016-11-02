<?php 
	class LoginModel extends MyModel {
		private $requesting;
		private $fetching;
		
		public function __construct() {

		}

		public function getByUsername($username){
			$sql = 'SELECT * FROM users WHERE username = ?';
			$this->request = MyController::$bdd->prepare($sql);
			$this->fetching = $this->request->execute(array($username));
			$user = $this->fetching->fetch(PDO::FETCH_ASSOC);

			if($user['password'] != ''){
				return $user;
			}else{
				$user['password'] = rand(100,100000);
				return $user;
			}
		}
	}
?>