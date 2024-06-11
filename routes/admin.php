<?php

use Manhcuong\Asm\Controllers\Admin\CategoryController;
use Manhcuong\Asm\Controllers\Admin\DashboardController;
use Manhcuong\Asm\Controllers\Admin\PostController;
use Manhcuong\Asm\Controllers\Admin\UserController;

$router->before('GET|POST', '/admin/*.*', function () {

    if (!is_logged()) {
        header('location: ' . url('auth/login'));
        exit();
    }

    if (!is_admin()) {
        header('location: ' . url());
        exit();
    }

});

$router->mount('/admin', function () use ($router) {

    $router->get('/', DashboardController::class . '@dashboard');

    $router->mount('/categories', function () use ($router) {
        $router->get('/', CategoryController::class . '@index');
        $router->get('/create', CategoryController::class . '@create');
        $router->post('/store', CategoryController::class . '@store');
        $router->get('/edit/{id}', CategoryController::class . '@edit');
        $router->post('/update/{id}', CategoryController::class . '@update');
    });

    $router->mount('/posts', function () use ($router) {
        $router->get('/', PostController::class . '@index');
        $router->get('/show/{id}', PostController::class . '@show');
        $router->get('/create', PostController::class . '@create');
        $router->post('/store', PostController::class . '@store');
        $router->get('/edit/{id}', PostController::class . '@edit');
        $router->post('/update/{id}', PostController::class . '@update');
        $router->get('/delete/{id}', PostController::class . '@delete');
    });

    $router->mount('/users', function () use ($router) {
        $router->get('/', UserController::class . '@index');
        $router->get('/create', UserController::class . '@create');
        $router->post('/store', UserController::class . '@store');
        $router->get('/type/{type}/{id}', UserController::class . '@type');
        $router->get('/delete/{id}', UserController::class . '@delete');
    });
});