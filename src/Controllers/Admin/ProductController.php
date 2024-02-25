<?php

namespace User\Duan1\Controllers\Admin;

use User\Duan1\Commons\Controller;
use User\Duan1\Models\Product;

class ProductController extends Controller
{
	protected Product $product;
	protected string $folder = 'products.';

	public function __construct()
	{
		$this->product = new Product();
	}

	public function index()
	{
//		$data['products'] = $this->product->getAllProducts();
//
//		if (empty($data['products'])) {
//			die(404);
//		}
//
//		return $this->renderViewAdmin($this->folder . __FUNCTION__, $data);
	}

	public function show($id)
	{
		$data['product'] = $this->product->getById($id);
		if (empty($data['product'])) {
			die(404);
		}

		return $this->renderViewAdmin($this->folder . __FUNCTION__, $data);
	}

	public function create()
	{
		if (!empty($_POST)) {

			if(empty($_POST['name'])){
				$_SESSION['errors']['name'] = 'Vui long nhap name';
			}else{
				unset($_SESSION['errors']['name']);
			}

			if(empty($_POST['price'])){
				$_SESSION['errors']['price'] = 'Vui long nhap price';
			}else{
				unset($_SESSION['errors']['price']);
			}

			if(empty($_FILES['image']['tmp_name'])){
				$_SESSION['errors']['image'] = 'Vui long dang anh';
			}else{
				unset($_SESSION['errors']['image']);
			}

			if(empty($_POST['description'])){
				$_SESSION['errors']['description'] = 'Vui long nhap description';
			}else{
				unset($_SESSION['errors']['description']);
			}

			if(empty($_POST['id_category'])){
				$_SESSION['errors']['id_category'] = 'Vui long chon category';
			}else{
				unset($_SESSION['errors']['id_category']);
			}

			$convertDescription = htmlspecialchars($_POST['description']);
			if(empty($_SESSION['errors'])){
				$img = file_get_contents($_FILES['image']['tmp_name']);
				$imgB64 = base64_encode($img);
				$this->product->insert($_POST['name'], $_POST['price'], $imgB64, $convertDescription, $_POST['id_category']);
				header('location: /duan1-php/admin/products');
			}else{
				header('location: /duan1-php/admin/products/create');
			}
		}

		return $this->renderViewAdmin($this->folder . __FUNCTION__);
	}

	public function update($id)
	{
		$data['product'] = $this->product->getById($id);
		if (!empty($_POST)) {
			$this->product->update($id, $_POST['name'], $_POST['price'], $_POST['image'], $_POST['description'], $_POST['views'], $_POST['id_category']);
			// khi update thành công sẽ thêm session success vào
			$_SESSION['success'] = 'Thao tác thành công!';
			header('location: /duan1-php/admin/products');
			exit();
		}
		return $this->renderViewAdmin($this->folder . __FUNCTION__, $data);
	}

	public function delete($id): void
	{
		$this->product->deleteByID($id);
		header('location: /duan1-php/admin/products');
	}

	public function page($page = '1')
	{
		$limit = 10;
		$initial_page = ($page - 1) * $limit;
		$total = $this->product->getTotalCount();
		$total_page = ceil($total / $limit);
		$products = $this->product->getAllPage($limit, $initial_page);
//		$data['total_page'] = $total_page;
//		$data['products'] = $this->product->getAllPage($limit, $initial_page);
		return $this->renderViewAdmin($this->folder . 'index',
			[
				'page' => $page,
				'total_page' => $total_page,
				'products' => $products
			]
		);
	}
}
