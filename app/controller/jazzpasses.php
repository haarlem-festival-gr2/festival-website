<?php

use Core\Route\Method;
use Core\Route\Route;

Route::serve('/jazzpasses/*', function () {
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    if (Route::auth() && Route::auth()->Role === 'admin') {
        switch ($uri) {
            case '/jazzpasses/managePasses':
                require_once __DIR__.'/../controller/jazzpasses/managePasses.php';
                break;
            case '/jazzpasses/createPass':
                require_once __DIR__.'/../controller/jazzpasses/createPass.php';
                break;
            case '/jazzpasses/editPass':
                require_once __DIR__.'/../controller/jazzpasses/editPass.php';
                break;
            default:
                Route::redirect('/jazzpasses/managePasses');
                break;
        }
    } else {
        Route::redirect('/jazz');
    }
}, Method::ALL);
