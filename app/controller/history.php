<?php

use Core\Route\Method;
use Core\Route\Route;

Route::serve('/history', function (array $props) {
    Route::render('history', []);
});
