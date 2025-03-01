<?php

use eftec\bladeone\BladeOne;

// Hàm hiển thị giao diện
if (!function_exists('view')) {
    function view($viewFile, $data = [])
    {
        $viewDir = PATH_ROOT . "/resources/views";
        $storageDir = PATH_ROOT . "/storage/cache";
        $blade = new BladeOne($viewDir, $storageDir, BladeOne::MODE_DEBUG);
        echo $blade->run($viewFile, $data);
    }
}

if (!function_exists('is_upload')) {
    function is_upload($key)
    {
        return isset($_FILES[$key]) && $_FILES[$key]['size'] > 0;
    }
}

if (!function_exists('route')) {
    function route($path)
    {
        return BASE_URL . $path;
    }
}

if (!function_exists('redirect')) {
    function redirect($path)
    {
        header('Location: ' . BASE_URL . $path);
        exit;
    }
}

if (!function_exists('redirect404')) {
    function redirect404()
    {
        header('HTTP/1.1 404 Not Found');
        exit;
    }
}

if (!function_exists('file_url')) {
    function file_url($path)
    {
        if (!file_exists($path)) {
            return null;
        }

        return BASE_URL . $path;
    }
}

if (!function_exists('debug')) {
    function debug(...$data)
    {
        echo '<pre>';
        print_r($data);
        die;
    }
}
