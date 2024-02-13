<?php

namespace  User\Duan1\Controllers\Client;

use User\Duan1\Commons\Controller;
use User\Duan1\Models\Category;
use User\Duan1\Models\Product;
use User\Duan1\Models\User;

class HomeController extends Controller
{
	protected Product $product;
	protected Category $category;
	public function __construct()
	{
		$this->product = new Product();
		$this->category = new Category();
	}

	public function index()
	{
		$products = $this->product->getAllProducts();
		$category = $this->category->getAll();

//		$data = $user->getAll();
//		echo "<pre>";
//		print_r($data);
//		echo "</pre>";
		return $this->renderViewClient('home', [
			'products' => $products,
			'categorys' => $category
		]);
	}
}

?>