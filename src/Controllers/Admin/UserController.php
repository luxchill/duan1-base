<?php

namespace User\Duan1\Controllers\Admin;

use \User\Duan1\Models\User;
use User\Duan1\Commons\Controller;

class UserController extends Controller
{
	private User $user;
	private string $folder = 'users.';
	
	public function __construct()
	{
		$this->user = new User;
	}
	
	// danh sách
	public function index()
	{
		$data['users'] = $this->user->getAll();

		return $this->renderViewAdmin(
			$this->folder . __FUNCTION__,
			$data
		);
	}

	public function create()
	{
		if(!empty($_POST)){
//			$this->user->insert($_POST['username'],$_POST['email'],$_POST['password']);
			echo "success";
		}

		return $this->renderViewAdmin($this->folder. __FUNCTION__);
	}

}