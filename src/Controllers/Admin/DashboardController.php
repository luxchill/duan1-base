<?php

namespace User\Duan1\Controllers\Admin;

use User\Duan1\Commons\Controller;

class DashboardController extends Controller
{
	public function index()
	{
		return $this->renderViewAdmin('dashboard');
	}


}