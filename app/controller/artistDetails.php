<?php

use Core\Route\Route;
use service\JazzService;

require_once __DIR__.'/../service/JazzService.php';

Route::serve('/artistDetails', function (array $props) {
    if(!isset($props['id'])) {
        Route::redirect('/jazz');
    }

    $artistId = $props['id'];

    $jazzService = new JazzService();
    $artist = $jazzService->getArtistById($artistId);
    $performances = $jazzService->getPerformancesByArtist($artist);

    Route::render('jazz.artist.main', [
        'artist' => $artist,
        'performances' => $performances,
    ]);
});
