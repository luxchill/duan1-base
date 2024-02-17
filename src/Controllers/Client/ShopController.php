<?php

namespace User\Duan1\Controllers\Client;

use User\Duan1\Commons\Controller;
use User\Duan1\Models\Category;
use User\Duan1\Models\Product;

class ShopController extends Controller
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
		return $this->renderViewClient('shop', [
			'products' => $products,
			'categorys' => $category
		]);
	}

	public function show($id)
	{
		$detail = $this->product->getById($id);
		return $this->renderViewClient(
			'detail',
			[
				'detail' => $detail,
			]
		);
	}

//	public function filter($id)
//	{
//		echo $id;
//		return $this->renderViewClient()
//	}
}