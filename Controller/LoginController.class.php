<?php
	
	class LoginController extends MyController {
		private $loginModel;

		private function __construct() {
			$this->loginModel = new LoginModel();
		}

		public function connect($username, $password) {
			$user = $this->loginModel->getByUsername($username);
			if($user['password'] == md5($password)) {
				$_SESSION['AUTH'] = $user['id'];
				setcookie('AUTH', '', time() + 24*3600); // Expiration du cookie sous 24h  
				echo '<meta http-equiv="refresh" content="0.1;index.php">'; 
			}else{
				$error = 200;
				MyController::error($error);
			}
		}

	}

?>