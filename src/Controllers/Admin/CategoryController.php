<?php

namespace User\Duan1\Controllers\Admin;

use User\Duan1\Commons\Controller;
use User\Duan1\Models\Category;

class CategoryController extends Controller
{
	protected Category $category;
	private string $folder = 'categorys.';

	public function __construct()
	{
		$this->category = new Category();
	}

	public function index()
	{
		$data['categorys'] = $this->category->getAll();
		return $this->renderViewAdmin($this->folder . __FUNCTION__, $data);
	}

	public function create()
	{
		if (!empty($_POST)) {
			$this->category->insert($_POST['name']);
			header('location: /duan1-php/admin/categorys');
		}
		return $this->renderViewAdmin($this->folder . __FUNCTION__);
	}

	public function show($id)
	{
		$category = $this->category->getById($id);
		if (empty($category)) {
			die(404);
		}

		return $this->renderViewAdmin($this->folder . __FUNCTION__,
			['category' => $category]
		);
	}

	public function update($id)
	{
		$data['category'] = $this->category->getById($id);

		if (empty($data['category'])) {
			die(404);
		}

		if (!empty($_POST)) {
			$this->category->update($id, $_POST['name']);
			$_SESSION['success'] = 'Update category success';
			header('location: /duan1-php/admin/categorys');
		}

		return $this->renderViewAdmin($this->folder . __FUNCTION__, $data);
	}

	public function delete($id)
	{
		$this->category->deleteById($id);
		header('location: /duan1-php/admin/categorys');
	}

	public function page($id = '1')
	{
		$limit = 6;
		$initial_page = ($id - 1) * $limit;
		// $data['page_count'] = $this->category->getTotalCount();
		$total = $this->category->getTotalCount();
		// $total_rows = $this->category->getTotalCount();
		$total_page = ceil($total / $limit);

		$data['categorys'] = $this->category->getAllPage($limit, $initial_page);
		$data['total_page'] = $total_page;
		// echo 'Page: ' . $id . "</br>";
		// echo 'Total: ' . $total_page . "</br>";
		return $this->renderViewAdmin($this->folder . 'index', $data);
	}
}
