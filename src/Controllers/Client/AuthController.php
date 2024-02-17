<?php

namespace User\Duan1\Controllers\Client;

use User\Duan1\Commons\Controller;
use User\Duan1\Models\User;

class AuthController extends Controller
{
	protected User $user;
	protected $folder = 'Auth.';

	public function __construct()
	{
		$this->user = new User();
	}

	public function login()
	{
		if (!empty($_POST)) {
			$email = trim($_POST['email']);
			$password = trim($_POST['password']);
			$user = $this->user->getByEmail($email);

			echo "<pre>";
			var_dump($user);
			echo "</pre>";


			if ($user) {
				if ($password === $user['password']) {
					$_SESSION['user'] = [
						'id' => $user['id'],
						'username' => $user['username'],
						'email' => $user['email'],
						'image' => $user['image'],
						'role' => $user['role'],
						'is_login' => true
					];

					if($user['role'] != 1){
						header('location: /duan1-php/');
					}else{
						header('location: /duan1-php/admin');
					}
				} else {
					echo 'Sai mật khẩu';
				}
			} else {
				echo 'Tài khoản không tồn tại';
			}
		}
		return $this->renderViewClient($this->folder . __FUNCTION__);
	}

	public function register()
	{
		if(!empty($_POST)){
			$username = $_POST['username'];
			$email = $_POST['email'];
			$password = $_POST['password'];

//			echo $password . "</br>";
//			echo $email . "</br>";
//			echo $username . "</br>";
			$this->user->insert($username, $email, $password);
//			$_SESSION['success'] = 'Đăng kí thành công';
			header('location: /duan1-php/login');
		}

		return $this->renderViewClient($this->folder . __FUNCTION__);

	}

	public function logout()
	{
		unset($_SESSION['user']);
		header('location: /duan1-php/');
	}

}