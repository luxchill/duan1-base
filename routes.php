<?php

use Bramus\Router\Router;
use User\Duan1\Controllers\Admin\CategoryController;
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
		$router->get('/{id}/show', UserController::class . '@show');
		$router->get('/{id}/delete', UserController::class . '@delete');
		$router->match('GET|POST', '/{id}/update', UserController::class . '@update');
	});
	// Products Manager
	$router->mount('/products', function () use ($router) {
		$router->get('/', ProductController::class . '@index');
	});

	// Category Manager
	$router->mount('/categorys', function () use ($router) {
		$router->get('/', CategoryController::class . '@index');
//		$router->match('GET|POST', '/create', CategoryController::class . '@create');
		$router->match('GET|POST', '/create', CategoryController::class . '@create');
		$router->get('/{id}/show', CategoryController::class . '@show');
		$router->match('GET|POST', '/{id}/update' ,CategoryController::class . '@update');
		$router->get('/{id}/delete', CategoryController::class . '@delete');
	});

});

$router->run();
