<?php

use Core\Route\Route;

Route::serve('/jazz', function (array $props) {
    Route::render("jazz", []);
});
