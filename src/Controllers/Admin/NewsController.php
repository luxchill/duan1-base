<?php

namespace User\Duan1\Controllers\Admin;

use User\Duan1\Commons\Controller;

class NewsController extends Controller
{
	protected $folder = 'news.';

	public function __construct()
	{

	}

	public function index()
	{
		return $this->renderViewAdmin($this->folder . __FUNCTION__);
	}
}