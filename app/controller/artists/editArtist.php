<?php

use Core\Route\Method;
use Core\Route\Route;
use Service\ImageService;
use service\JazzService;
use Service\ValidateInputService;

require_once __DIR__ . '/../../service/JazzService.php';
require_once __DIR__ . '/../../service/ValidateInputService.php';

$jazzService = new JazzService();

Route::serve('/artists/editArtist', function (array $props) use ($jazzService){
    if(!isset($props['id'])) {
        Route::redirect('/artists/manageArtists');
    }

    $artistId = $props['id'];
    $artist = $jazzService->getArtistById($artistId);

    Route::render('admin.jazz.edit.artist',
        ['artist' => $artist]
    );
}, Method::GET);


Route::serve('/artists/editArtist', function (array $props) use ($jazzService){
    $validateInputService = new ValidateInputService();

    $id = $props['id'];
    $name = $props['name'];
    $bio = $props['bio'];

    $validateInputService->checkRequiredFields([$name, $bio]);
    $validateInputService->validateArtistBio($bio);

    $songs  = [$props['song1'], $props['song2'], $props['song3']];
    $albums = [$props['album1'], $props['album2'], $props['album3']];

    $validateInputService->validateAlbums($albums);
    $validateInputService->validateSongs($songs);

    $headerImgPath = $validateInputService->updateImage('header_img', 'jazz/artists');
    $artistImg1Path = $validateInputService->updateImage('artist_img1', 'jazz/artists');
    $artistImg2Path = $validateInputService->updateImage('artist_img2', 'jazz/artists');
    $performanceImgPath = $validateInputService->updateImage('performance_img', 'jazz/performances');

    $jazzService->updateArtist($id, $name, $bio, $songs, $albums, $headerImgPath, $artistImg1Path, $artistImg2Path, $performanceImgPath);

    Route::redirect('/artists/manageArtists');
}, Method::POST);
