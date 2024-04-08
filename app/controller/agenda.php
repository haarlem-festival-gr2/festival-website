<?php

use Core\Route\Method;
use Core\Route\Route;

// this will re-route requests to a subfolder
Route::serve('/agenda/*', function () {
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    switch ($uri) {
        case '/agenda/purchase':
            require_once __DIR__.'/../controller/agenda/purchase.php';
            break;
        case '/agenda/user':
            require_once __DIR__.'/../controller/agenda/user';
            break;
        default:
            if (Route::auth() === false) {
                Route::redirect('/login');
            } else {
                Route::redirect('/agenda/purchase');
            }
            break;
    }
}, Method::ALL);
