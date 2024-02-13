<?php

namespace  User\Duan1\Controllers\Client;

use User\Duan1\Commons\Controller;
use User\Duan1\Models\User;

class HomeController extends Controller
{
	public function index()
	{
		$name = 'Nguyen Hoang Anh';
		$password = 'keoke123';
		$user = new User();
		$user->sayHello();
		$user->getById(2);
//		$data = $user->getAll();
//		echo "<pre>";
//		print_r($data);
//		echo "</pre>";
		return $this->renderViewClient('home');
	}
}

?>