<?php

use Core\Route\ErrorCode;
use Core\Route\Method;
use Core\Route\Route;
use Service\DynPageService;

$service = new DynPageService();

Route::serve('/index', function (array $props) use ($service) {
    $user = Route::auth();

    $uri = $_SERVER['REQUEST_URI'];
    $uri = explode('?', $uri)[0];

    if ($uri === '/index/edit/') {
        Route::redirect('/index/edit');
    }

    if ($uri === '/index/edit') {
        if ($user !== false && $user->Role === 'admin') {
            $id = @$props['id'];
            if ($id === null) {
                $id = 1;
            }
            $html = $service->getPageFromId($id);
            if ($html === false) {
                $html = 'Edit this page to your liking!';
            }

            Route::render('admin.edithome', ['current' => $html, 'pages' => $service->getAllPageData(), 'editpageid' => $id]);

            return;
        } else {
            Route::error(ErrorCode::NOT_FOUND);
        }
        exit;
    }

    Route::render('main.mainpage_head', ['content' => function () use ($service) {
        echo $service->getPage('index');
    }]);
});

Route::serve('/index/edit', function (array $props) use ($service) {
    $user = Route::auth();

    $uri = $_SERVER['REQUEST_URI'];
    $uri = explode('?', $uri)[0];
    if (! ($uri === '/index/edit' && $user !== false && $user->Role === 'admin')) {
        exit;
    }
    $html = $props['wysiwyg'];
    $id = $props['editpageid'];

    if ($id === null) {
        $id = 1;
    }

    $path = @$service->getPageDataFromId($id)['Path'];

    if ($path === null) {
        exit;
    }

    $service->setPage($path, $html);
}, Method::POST);
