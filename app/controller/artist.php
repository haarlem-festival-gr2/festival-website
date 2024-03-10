<?php

use Core\Route\Route;
use service\JazzService;

require_once __DIR__.'/../repository/BaseRepository.php';
require_once __DIR__.'/../service/JazzService.php';

Route::serve('/artist', function (array $props) {
    $artistId = $props['id'];
    var_dump($artistId);
    Route::render('jazz.artist', []);
});
