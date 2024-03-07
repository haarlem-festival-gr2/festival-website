<?php

use Core\Route\Route;

Route::serve('/artist', function (array $props) {
    $artistId = $props['id'];
    var_dump($artistId);
    Route::render('artist', []);
});
