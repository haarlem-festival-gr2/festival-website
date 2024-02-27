<?php

use Core\Route\Route;

Route::serve('/artist', function (array $props) {
    Route::render('artist', []);
});