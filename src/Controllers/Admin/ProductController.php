<?php

namespace User\Duan1\Controllers\Admin;

use User\Duan1\Commons\Controller;

class ProductController extends Controller
{
	protected ProductController $productController;
	protected string $folder = 'products.';
	public function index()
	{
		return $this->renderViewAdmin($this->folder. __FUNCTION__);
	}

}