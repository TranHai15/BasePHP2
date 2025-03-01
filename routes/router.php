<?php

use Bramus\Router\Router;

$router = new Router();

// Nơi khai báo các đường dẫn
$router->get('/', function () {
    echo "Base dự thi môn PHP 2";
});

// Nhóm route ta sử dụng mount
$router->mount('/admin', function () use ($router) {
    // Dashboard
    $router->get('/', function () {
        return view('admin.dashboard');
    });
});


// --------------------------

$router->run();
