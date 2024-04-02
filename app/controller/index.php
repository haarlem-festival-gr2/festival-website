<?php

use Core\Route\Method;
use Core\Route\Route;

Route::serve('/index', function (array $props) {
    $user = Route::auth();
    if ($_SERVER['REQUEST_URI'] === '/index/edit' && $user !== false && $user->Role === 'admin') {
        Route::render("admin.edithome", []);
        exit;
    }

    if (is_file("/tmp/index.html")) {
        require "/tmp/index.html";
    } else {
        Route::render('index', []);
    }
});

Route::serve('/index', function (array $props) {
    $user = Route::auth();
    if (!($_SERVER['REQUEST_URI'] === '/index/edit' && $user !== false && $user->Role === 'admin')) {
        exit;
    }

    $html = $props['wysiwyg'];

    $ret = file_put_contents("/tmp/index.html", $html);

    if ($ret === false) {
        echo "Failed to save file.";
    } else {
        echo "File saved.";
    }
}, Method::POST);
