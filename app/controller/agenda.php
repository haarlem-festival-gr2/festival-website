<?php

use Core\Route\Method;
use Core\Route\Route;

// this will re-route requests to a subfolder
Route::serve('/agenda/*', function () {
    $uri = $_SERVER['REQUEST_URI'];

    switch ($uri) {
        case '/agenda/purchase':
            require_once __DIR__.'/../controller/agenda/purchase.php';
            break;
        default:
            Route::redirect('/agenda/purchase');
            break;
    }
}, Method::ALL);
