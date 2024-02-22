<?php

namespace User\Duan1\Controllers\Admin;

use User\Duan1\Commons\Controller;
use User\Duan1\Models\User;

class ProfileController extends Controller
{
	protected string $folder = 'profile.';
	protected User $user;
	public function __construct()
	{
		$this->user = new User();
	}

	public function index($id)
	{
		echo $id;
		$this->renderViewAdmin($this->folder . __FUNCTION__);
	}

}