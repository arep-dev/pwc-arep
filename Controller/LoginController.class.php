<?php
	
	class LoginController extends MyController {
		private $loginModel;

		public function __construct() {
			$this->loginModel = new LoginModel();
		}

		public function connect($username, $password) {
			$user = $this->loginModel->getByUsername($username);
			if($user['password'] == md5($password)) {
				$_SESSION['AUTH'] = $user['id'];
				setcookie('AUTH', $user['id'], time() + 24*3600); // Expiration du cookie sous 24h  
<<<<<<< HEAD
				echo '<meta http-equiv="refresh" content="0.1;index.php">'; 
=======
				echo '<meta http-equiv="refresh" content="0.1;index">'; 
>>>>>>> 2fe376e433643b245d23c8ae9165356c7061beab
			}else{
				$error = 200;
				MyController::error($error);
			}
		}

	}

?>