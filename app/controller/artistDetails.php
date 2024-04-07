<?php

use Core\Route\Route;
use service\JazzService;

require_once __DIR__.'/../service/JazzService.php';

Route::serve('/artistDetails', function (array $props) {
    if (! isset($props['id'])) {
        Route::redirect('/jazz');
    }

    $artistId = $props['id'];

    $jazzService = new JazzService();
    $artist = $jazzService->getArtistById($artistId);
    $performances = $jazzService->getPerformancesByArtist($artist);

    $words = explode(' ', $artist->Bio);
    $wordsPerPart = ceil(count($words) / 2);
    $bioPart1 = implode(' ', array_slice($words, 0, $wordsPerPart));
    $bioPart2 = implode(' ', array_slice($words, $wordsPerPart));

    Route::render('jazz.artist.main', [
        'artist' => $artist,
        'performances' => $performances,
        'bioPart1' => $bioPart1,
        'bioPart2' => $bioPart2,
    ]);
});
