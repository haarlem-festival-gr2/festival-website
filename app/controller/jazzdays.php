<?php

use Core\Route\Method;
use Core\Route\Route;

Route::serve('/jazzdays/*', function () {
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    if (Route::auth() && Route::auth()->Role === 'admin') {
        switch ($uri) {
            case '/jazzdays/manageDays':
                require_once __DIR__.'/../controller/jazzdays/manageDays.php';
                break;
            case '/jazzdays/createDay':
                require_once __DIR__.'/../controller/jazzdays/createDay.php';
                break;
            case '/jazzdays/editDay':
                require_once __DIR__.'/../controller/jazzdays/editDay.php';
                break;
            default:
                Route::redirect('/jazzdays/manageDays');
                break;
        }
    } else {
        Route::redirect('/jazz');
    }
}, Method::ALL);
