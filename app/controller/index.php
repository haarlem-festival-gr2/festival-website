<?php

use Core\Route\ErrorCode;
use Core\Route\Method;
use Core\Route\Route;

Route::serve('/index', function (array $props) {
    $user = Route::auth();
    if ($_SERVER['REQUEST_URI'] === '/index/edit') {
        if ($user !== false && $user->Role === 'admin') {
            $html = file_get_contents("/tmp/index.html");
            if ($html === false) {
                $html = "Edit this page to your liking!";
            }

            Route::render("admin.edithome", ['current' => $html]);
        } else {
            Route::error(ErrorCode::NOT_FOUND);
        }
        exit;
    }

    if (!is_file("/tmp/index.html")) {
        $ret = file_put_contents("/tmp/index.html", Route::template('index', []));
    }
    Route::render('main.mainpage_head', []);
    require "/tmp/index.html";

});

Route::serve('/index', function (array $props) {
    $user = Route::auth();
    if (!($_SERVER['REQUEST_URI'] === '/index/edit' && $user !== false && $user->Role === 'admin')) {
        exit;
    }

    switch (@$props['action']) {
        case 'Load Default':
            $ret = file_put_contents("/tmp/index.html", Route::template('index', []));

            if ($ret === false) {
                echo "Failed to save file.";
            } else {
                Route::redirect('/index/edit');
            }
            break;
        case 'Save':
        default:
            $html = $props['wysiwyg'];

            $ret = file_put_contents("/tmp/index.html", $html);

            if ($ret === false) {
                echo "Failed to save file.";
            }
            break;
    }

}, Method::POST);
