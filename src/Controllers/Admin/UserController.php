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
			$this->user->insert($_POST['username'],$_POST['email'],$_POST['password']);
			header('location: /duan1-php/admin/users');
			exit();
		}

		return $this->renderViewAdmin($this->folder. __FUNCTION__);
	}

	public function show($id)
	{
		$data['user'] = $this->user->getById($id);
		if(empty($data['user'])){
			die(404);
		}

		return $this->renderViewAdmin($this->folder . __FUNCTION__, $data);
	}

	public function update($id)
	{
		$data['user'] = $this->user->getById($id);

		if(!empty($_POST)){
			$this->user->update($_POST['id'],$_POST['username'],$_POST['email'],$_POST['password']);
			// khi update thành công sẽ thêm session success vào
			$_SESSION['success'] = 'Thao tác thành công!';
			header('location: /duan1-php/admin/users');
			exit();
		}
		return $this->renderViewAdmin($this->folder . __FUNCTION__, $data);
	}

	public function delete($id)
	{
		$this->user->deleteByID($id);
		header('location: /duan1-php/admin/users');
	}

}