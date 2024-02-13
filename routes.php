<?php

use Bramus\Router\Router;
use User\Duan1\Controllers\Admin\DashboardController;
use User\Duan1\Controllers\Admin\ProductController;
use User\Duan1\Controllers\Admin\UserController;
use User\Duan1\Controllers\Client\HomeController;
use User\Duan1\Controllers\Client\ShopController;

// Create router instance
$router = new Router();
// Define routes
$router->get('/', HomeController::class . '@index');
$router->get('/shop', ShopController::class . '@index');

// admin
$router->mount('/admin', function () use ($router) {
	$router->get('/', DashboardController::class . '@index');
	// Users Manager
	$router->mount('/users', function () use ($router) {
		$router->get('/', UserController::class . '@index');
		$router->match('GET|POST', '/create', UserController::class . '@create');
	});
	// Products Manager
	$router->mount('/products', function () use ($router) {
		$router->get('/', ProductController::class . '@index');
	});

});

$router->run();
