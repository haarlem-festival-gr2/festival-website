<?php

use Core\Route\ErrorCode;
use Core\Route\Method;
use Core\Route\Route;
use Service\DynPageService;

$service = new DynPageService();
Route::serve('/admin/*', function($props) use ($service) {
    if (@Route::auth()->Role !== 'admin') {
        return Route::error(ErrorCode::NOT_FOUND);
    }

    $url = $_SERVER['REQUEST_URI'];

    if ($url === '/admin/editpage') {
        $action = @$props['action'];

        switch ($action) {
            case 'Delete this page':
                $pageid = @$props['pageid'];
                if ($pageid !== null) {
                    if ($service->deletePage($pageid)) {
                        Route::redirect('/index/edit');
                    } else {
                        http_response_code(403);
                        echo "403 Forbidden";
                    }
                }
                break;
            case 'Edit this page':
                Route::redirect("/index/edit?id={$props['pageid']}");
                break;
            default:
                break;
        }
    } else if ($url === '/admin/addpage') {
        $title = $props['title'];
        $path = $props['path'];

        if (strpos($path, '/') !== false) {
            $parts = explode('/', $path);
            if (empty($parts[0])) {
                $path = $parts[1];
            } else {
                $path = $parts[0];
            }
        }

        if (empty($title) || empty($path)) {
            http_response_code(422);
            echo "422 Unprocessable Entity";
        }

        if (!$service->newPage($path, $title)) {
            http_response_code(500);
            echo "500 Internal Server Error";
        } else {
            Route::redirect('/index/edit');
        }

    }
}, Method::POST);
