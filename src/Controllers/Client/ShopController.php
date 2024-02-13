<?php

namespace User\Duan1\Controllers\Client;

use User\Duan1\Commons\Controller;

class ShopController extends Controller
{
	public function index()
	{
		return $this->renderViewClient('shop', [
			'username' => 'hoanganh',
			'email' => 'anhnhph33991@fpt.edu'
		]);
	}
}