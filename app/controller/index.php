<?php

use Core\Route\ErrorCode;
use Core\Route\Method;
use Core\Route\Route;
use Repository\DynPageRepository;

Route::serve('/index', function (array $props) use ($indexDynRoute) {
    $service = new DynPageRepository();

    $user = Route::auth();
    if ($_SERVER['REQUEST_URI'] === '/index/edit') {
        if ($user !== false && $user->Role === 'admin') {
            $html = $service->get_page('');
            if ($html === false) {
                $html = "Edit this page to your liking!";
            }

            Route::render("admin.edithome", ['current' => $html]);
            return;
        } else {
            Route::error(ErrorCode::NOT_FOUND);
        }
        exit;
    }

    if (!is_file($indexDynRoute)) {
        $ret = file_put_contents($indexDynRoute, Route::template('index', []));
    }

    Route::render('main.mainpage_head', ['content' => function() use ($indexDynRoute) {
        echo file_get_contents($indexDynRoute);
    }]);
});

// only works in index/edit
Route::serve('/index', function (array $props) use ($indexDynRoute) {
    $user = Route::auth();
    if (!($_SERVER['REQUEST_URI'] === '/index/edit' && $user !== false && $user->Role === 'admin')) {
        exit;
    }

    switch (@$props['action']) {
        case 'Load Default':
            $ret = file_put_contents($indexDynRoute, Route::template('index', []));

            if ($ret === false) {
                echo "Failed to save file.";
            } else {
                Route::redirect('/index/edit');
            }
            break;
        case 'Save':
        default:
            $html = $props['wysiwyg'];

            $ret = file_put_contents($indexDynRoute, $html);

            if ($ret === false) {
                echo "Failed to save file.";
            }
            break;
    }

}, Method::POST);
