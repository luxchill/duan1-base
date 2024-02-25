<?php

namespace User\Duan1\Controllers\Admin;

use User\Duan1\Commons\Controller;
use User\Duan1\Models\Product;

class DashboardController extends Controller
{
	protected Product $product;

	public function __construct()
	{
		$this->product = new Product();
	}

	public function index()
	{
		$dataTop5Products = $this->product->getTop5();
		return $this->renderViewAdmin('dashboard', [
			'top5' => $dataTop5Products
		]);
	}


}