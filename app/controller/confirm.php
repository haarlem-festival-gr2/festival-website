<?php

use Core\Route\Method;
use Core\Route\Route;

Route::serve('/confirm', function (array $props) {
    Route::render('confirmation', []);
}, Method::GET);
