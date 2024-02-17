<?php

namespace User\Duan1\Controllers\Client;

use User\Duan1\Commons\Controller;
use User\Duan1\Models\User;

class ProfileController extends Controller
{
	protected User $user;
	public function __construct()
	{
		$this->user = new User();
	}

	public function show($id)
	{
//		echo $id . '</br>';
		$username = $_SESSION['user']['username'];
		$email = $_SESSION['user']['email'];

		if(!empty($_POST)){
			$img = file_get_contents($_FILES['image']['tmp_name']);
			$imgBase64 = base64_encode($img);
			$_SESSION['user']['image'] = $imgBase64;
			$this->user->update($id, $username, $email, '123456' ,$imgBase64);
		}


		return $this->renderViewClient('profile');
	}

	public function luxchill()
	{
		return $this->renderViewClient('luxchill');
	}


}