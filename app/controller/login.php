<?php

use Core\Route\Route;

Route::serve('/login', function (array $props) {
    Route::render("login", []);
});
