<?php

namespace User\Duan1\Controllers\Client;

use User\Duan1\Commons\Controller;

class AuthController extends Controller
{
	protected $folder = 'Auth.';

	public function login()
	{
		return $this->renderViewClient($this->folder. __FUNCTION__);
	}

}