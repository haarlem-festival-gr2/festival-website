<?php

use Core\Route\Method;
use Core\Route\Route;

Route::serve('/venues/*', function () {
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    if (Route::auth() && Route::auth()->Role === 'admin') {
        switch ($uri) {
            case '/venues/manageVenues':
                require_once __DIR__.'/../controller/venues/manageVenues.php';
                break;
            case '/venues/createVenue':
                require_once __DIR__.'/../controller/venues/createVenue.php';
                break;
            case '/venues/editVenue':
                require_once __DIR__.'/../controller/venues/editVenue.php';
                break;
            default:
                Route::redirect('/venues/manageVenues');
                break;
        }
    } else {
        Route::redirect('/jazz');
    }
}, Method::ALL);
