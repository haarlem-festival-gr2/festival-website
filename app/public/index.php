<?php

declare(strict_types=1);

namespace App;

require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/../core/Route.php';

use Core\Route\ErrorCode;
use Core\Route\Route;

Route::start_router(function (array $routes) {
    $first_path = $routes[0];

    if (pathinfo($first_path, PATHINFO_EXTENSION) == 'css') {
        $file = '/app/public/'.$first_path;
        Route::serve('/', function () use ($file) {
            header('Content-Type: text/css');
            readfile($file);
        });
        exit;
    }

    if (pathinfo($first_path, PATHINFO_EXTENSION) == 'png') {
        $file = '/app/public/'.$first_path;
        Route::serve('/', function () use ($file) {
            header('Content-Type: image/png');
            readfile($file);
        });
        exit;
    }

    $controller_file = __DIR__.'/../controller/'.$first_path.'.php';

    if (file_exists($controller_file)) {
        require_once $controller_file;
    } else {
        Route::error(ErrorCode::NOT_FOUND);
    }
});
