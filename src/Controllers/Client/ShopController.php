<?php

namespace User\Duan1\Controllers\Client;

use User\Duan1\Commons\Controller;
use User\Duan1\Models\Product;

class ShopController extends Controller
{
	protected Product $product;

	public function __construct()
	{
		$this->product = new Product();
	}

	public function index()
	{
		$products = $this->product->getAllProducts();
		return $this->renderViewClient('shop', [
			'products' => $products
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
}