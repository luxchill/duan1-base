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
use User\Duan1\Controllers\Client\ProfileController;
use User\Duan1\Controllers\Client\NewController;
use User\Duan1\Controllers\Client\CartController;
use User\Duan1\Controllers\Client\AboutController;

// Create router instance
$router = new Router();
// Define routes
$router->get('/', HomeController::class . '@index');
//$router->get('/shop', ShopController::class . '@index');
//$router->get('/shop/{id}', ShopController::class . '@show');
//$router->get('/filter/{id}', ShopController::class . '@filter');
$router->get('/post/{id}', ClientCommentController::class . '@show');
$router->match('GET|POST', '/login', AuthController::class . '@login');
$router->match('GET|POST', '/register', AuthController::class . '@register');
$router->match('GET|POST', '/profile/{id}', ProfileController::class . '@show');
//$router->get('/profile/luxchill', ProfileController::class . '@luxchill');

$router->get('/cart', CartController::class . '@index');
//$router->get('/cart/{id}',CartController::class . '@index');
$router->get('/about', AboutController::class . "@index");

$router->get('/{id}/logout', AuthController::class . '@logout');


$router->mount('/shop', function () use ($router) {
	$router->get('/', ShopController::class . '@index');
	$router->get('/{id}/show', ShopController::class . '@show');
	$router->get('/{id}/filter', ShopController::class . '@filter');
});

$router->mount('/news', function () use ($router) {
	$router->get('/', NewController::class . '@index');
	$router->get('/{id}/show', ShopController::class . '@show');
	$router->get('/{id}/filter', ShopController::class . '@filter');
});

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
		$router->get('/', ProductController::class . '@page');
		$router->match('GET|POST', '/create', ProductController::class . '@create');
		$router->match('GET|POST', '/{id}/update', ProductController::class . '@update');
		$router->get('/{id}/show', ProductController::class . '@show');
		$router->get('/{id}/delete', ProductController::class . '@delete');
		$router->get('/{page}', ProductController::class . '@page');
	});

	// Category Manager
	$router->mount('/categorys', function () use ($router) {
		$router->get('/', CategoryController::class . '@page');
		$router->match('GET|POST', '/create', CategoryController::class . '@create');
		$router->get('/{id}/show', CategoryController::class . '@show');
		$router->match('GET|POST', '/{id}/update', CategoryController::class . '@update');
		$router->get('/{id}/delete', CategoryController::class . '@delete');
		$router->get('/{id}', CategoryController::class . '@page');
	});
	// Comments Manager
	$router->mount('/comments', function () use ($router) {
		$router->get('/', CommentController::class . '@index');
		$router->match('GET|POST', '/create', CommentController::class . '@create');
		$router->get('/{id}/show', CommentController::class . '@show');
		$router->match('GET|POST', '/{id}/update', CommentController::class . '@update');
		$router->get('/{id}/delete', CommentController::class . '@delete');
	});
});

$router->run();
