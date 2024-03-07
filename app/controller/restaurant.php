<?php

use Core\Route\Route;

Route::serve('/restaurant', function (array $props) {
    Route::render('restaurant', []);
});