<?php

namespace User\Duan1\Controllers\Client;

use User\Duan1\Commons\Controller;

class AboutController extends Controller
{
	public int $count = 0;
	public function index()
	{
		return $this->renderViewClient('about');
	}

	public function addCount(): int
	{
		return $this->count++;
	}
}