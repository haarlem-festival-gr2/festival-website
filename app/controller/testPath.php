<?php

use Core\Route\Method;
use Core\Route\Route;

Route::serve("testPath", function ($props) {
    $uri = $_SERVER['REQUEST_URI'];

    if ($uri == "/testPath/another") {
        Route::render("login.login", []);
    } else {
        echo "Hello World";
    }
}, Method::POST);