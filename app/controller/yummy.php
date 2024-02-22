<?php

use Core\Route\Route;

Route::serve('/yummy', function (array $props) {
    Route::render("yummy", []);
});
