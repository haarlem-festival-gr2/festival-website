<?php

use Core\Route\Route;

Route::serve('/index', function (array $props) {
    Route::render('index', []);
});
