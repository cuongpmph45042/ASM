<?php

use Manhcuong\Asm\Controllers\Client\AuthController;
use Manhcuong\Asm\Controllers\Client\HomeController;
use Manhcuong\Asm\Controllers\Client\PostDetailController;

$router->get( '/', HomeController::class . '@index');

$router->get('/post/{id}', PostDetailController::class .'@index');

$router->get('/auth/login', AuthController::class .'@showFormLog');
$router->post('/auth/handle-login', AuthController::class .'@login');
$router->get('/auth/logout', AuthController::class .'@logout');
