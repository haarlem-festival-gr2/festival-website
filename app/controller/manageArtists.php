<?php

use Core\Route\Route;
use service\JazzService;

require_once __DIR__.'/../service/JazzService.php';

Route::serve('/manageArtists', function (array $props) {
    $jazzService = new JazzService();
    $artists = $jazzService->getAllArtistsWithDetails();

    Route::render('admin.jazz.manageArtists', [
        'artists' => $artists
    ]);
});
