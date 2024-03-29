<?php

use Core\Route\Route;
use service\JazzService;

require_once __DIR__.'/../service/JazzService.php';

Route::serve('/artist', function (array $props) {
    $artistId = $props['id'];

    $jazzService = new JazzService();
    $artist = $jazzService->getArtistById($artistId);
    $performances = $jazzService->getPerformancesByArtist($artist);

    Route::render('jazz.artist.main', [
        'artist' => $artist,
        'performances' => $performances,
    ]);
});
