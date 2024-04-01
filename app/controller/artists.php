<?php

use Core\Route\Method;
use Core\Route\Route;

Route::serve('/artists/*', function () {
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    if (Route::auth() && Route::auth()->Role === 'admin') {
        switch ($uri) {
            case '/artists/manageArtists':
                require_once __DIR__ . '/../controller/artists/manageArtists.php';
                break;
            case '/artists/createArtist':
                require_once __DIR__ . '/../controller/artists/createArtist.php';
                break;
            case '/artists/editArtist':
                require_once __DIR__ . '/../controller/artists/editArtist.php';
                break;
            default:
                Route::redirect('/artists/manageArtists');
                break;
        }
    } else{
        Route::redirect('/jazz');
    }
}, Method::ALL);
