<?php

use Core\Route\Route;
use service\JazzService;

require_once __DIR__.'/../repository/BaseRepository.php';
require_once __DIR__.'/../service/JazzService.php';

Route::serve('/artist', function (array $props) {
    $artistId = $props['id'];
    //var_dump($artistId);

    $jazzService = new JazzService();

    $artist = $jazzService->getArtistById($artistId);
    $albums = $jazzService->getAlbumsByArtistId($artistId);
    $songs = $jazzService->getSongsByArtistId($artistId);
    $performances = $jazzService->getPerformancesByArtistId($artistId);
    //foreach($performances as $performance){
    //  $performance->setArtist($artist);
    //}
    $events = [];
    foreach ($performances as $performance) {
        $venue = $jazzService->getVenueByPerformanceId($performance->getPerformanceID());
        $events[] = [
            'performance' => $performance,
            'venue' => $venue,
        ];
    }

    Route::render('jazz.artist', [
        'artist' => $artist,
        'albums' => $albums,
        'songs' => $songs,
        'events' => $events,
    ]);
});
