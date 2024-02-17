<?php

namespace User\Duan1\Controllers\Client;

use User\Duan1\Commons\Controller;

class NewController extends Controller
{
	protected string $folder = 'news.';
	public function index()
	{
		return $this->renderViewClient($this->folder . __FUNCTION__);
	}

	public function create()
	{

	}
}