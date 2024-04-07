<?php

use Core\Route\ErrorCode;
use Core\Route\Method;
use Core\Route\Route;

Route::serve('/admin/*', function($props) {
    if (@Route::auth()->Role !== 'admin') {
        return Route::error(ErrorCode::NOT_FOUND);
    }

    $url = $_SERVER['REQUEST_URI'];

    if ($url === '/admin/editpage') {
        $action = @$props['action'];

        switch ($action) {
            case 'Delete this page':
                var_dump($props);
                break;
            case 'Edit this page':
                Route::redirect("/index/edit?id={$props['pageid']}");
                break;
            default:
                break;
        }

    }
}, Method::POST);
