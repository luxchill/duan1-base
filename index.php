<?php
session_start();
ob_start();
require_once './vendor/autoload.php';
(new \Symfony\Component\Dotenv\Dotenv)->load(__DIR__ . '/.env');
require_once './env.php';
require_once './helper.php';
require_once './routes.php';
