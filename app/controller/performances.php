<?php

use Core\Route\Method;
use Core\Route\Route;

Route::serve('/performances/*', function () {
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    if (Route::auth() && Route::auth()->Role === 'admin') {
        switch ($uri) {
            case '/performances/managePerformances':
                require_once __DIR__.'/../controller/performances/managePerformances.php';
                break;
            case '/performances/createPerformance':
                require_once __DIR__.'/../controller/performances/createPerformance.php';
                break;
            case '/performances/editPerformance':
                require_once __DIR__.'/../controller/performances/editPerformance.php';
                break;
            default:
                Route::redirect('/performances/managePerformances');
                break;
        }
    } else {
        Route::redirect('/jazz');
    }
}, Method::ALL);
