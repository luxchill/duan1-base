<?php

use Bramus\Router\Router;
// admin
use User\Duan1\Controllers\Admin\CategoryController;
use User\Duan1\Controllers\Admin\DashboardController;
use User\Duan1\Controllers\Admin\ProductController;
use User\Duan1\Controllers\Admin\UserController;
use User\Duan1\Controllers\Admin\CommentController;
// client
use User\Duan1\Controllers\Client\HomeController;
use User\Duan1\Controllers\Client\ShopController;
use User\Duan1\Controllers\Client\CommentController as ClientCommentController;
use User\Duan1\Controllers\Client\AuthController;
// Create router instance
$router = new Router();
// Define routes
$router->get('/', HomeController::class . '@index');
$router->get('/shop', ShopController::class . '@index');
$router->get('/post/{id}', ClientCommentController::class . '@show');
$router->get('/shop/{id}', ShopController::class . '@show');
$router->get('/login', AuthController::class . '@login');

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
		$router->match('GET|POST', '/create', ProductController::class . '@create');
		$router->match('GET|POST', '/{id}/update', ProductController::class . '@update');
		$router->get('/{id}/show', ProductController::class . '@show');
		$router->get('/{id}/delete', ProductController::class . '@delete');
	});

	// Category Manager
	$router->mount('/categorys', function () use ($router) {
		$router->get('/', CategoryController::class . '@index');
		$router->match('GET|POST', '/create', CategoryController::class . '@create');
		$router->get('/{id}/show', CategoryController::class . '@show');
		$router->match('GET|POST', '/{id}/update' ,CategoryController::class . '@update');
		$router->get('/{id}/delete', CategoryController::class . '@delete');
	});

	$router->mount('/comments', function () use ($router){
		$router->get('/', CommentController::class . '@index');
		$router->match('GET|POST', '/create' ,CommentController::class . '@create');
		$router->get('/{id}/show', CommentController::class . '@show');
		$router->match('GET|POST', '/{id}/update', CommentController::class . '@update');
		$router->get('/{id}/delete', CommentController::class . '@delete');
	});

});

$router->run();
