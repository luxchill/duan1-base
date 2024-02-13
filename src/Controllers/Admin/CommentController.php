<?php

namespace User\Duan1\Controllers\Admin;

use User\Duan1\Commons\Controller;
use User\Duan1\Models\Comment;

class CommentController extends Controller
{
	protected Comment $comment;
	protected string $folder = 'comments.';

	public function __construct()
	{
		$this->comment = new Comment();
	}

	public function index()
	{
		$data['comments'] = $this->comment->getAll();
		return $this->renderViewAdmin($this->folder . __FUNCTION__, $data);
	}

	public function create()
	{
		if (!empty($_POST)) {
			echo $_POST['content'];
			echo $_POST['id_user'];
			echo $_POST['id_product'];
			echo $_POST['time_comment'];
		}
		return $this->renderViewAdmin($this->folder . __FUNCTION__);
	}

	public function show($id)
	{
		$data['comment'] = $this->comment->getById($id);

		if (empty($data['comment'])) {
			die(404);
		}

		return $this->renderViewAdmin($this->folder . __FUNCTION__, $data);
	}

	public function update($id)
	{
		$data['comment'] = $this->comment->getById($id);
		if (empty($data['comment'])) {
			die(404);
		}

		if(!empty($_POST)){
//			$this->comment->update($id, $_POST['content'],$_POST['id_user'],$_POST['id_product'],$_POST['time_comment']);

			echo $_POST['content'];
			echo $_POST['id_user'];
			echo $_POST['id_product'];
			echo $_POST['time_comment'];

//			$_SESSION['success'] = 'Update category success';
//			header('location: /duan1-php/admin/categorys');
		}

		return $this->renderViewAdmin($this->folder . __FUNCTION__, $data);
	}

	public function delete($id)
	{
		$this->comment->deleteById($id);
		header('location: /duan1-php/admin/comments');
	}

}