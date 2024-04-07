<?php

use Core\Route\Method;
use Core\Route\Route;
use service\JazzService;
use Service\ValidateInputService;

require_once __DIR__.'/../../service/JazzService.php';
require_once __DIR__.'/../../service/ValidateInputService.php';

Route::serve('/artists/createArtist', function (array $props) {
    Route::render('admin.jazz.create.artist', []);
}, Method::GET);

Route::serve('/artists/createArtist', function (array $props) {
    $jazzService = new JazzService();
    $inputService = new ValidateInputService();

    $name = $props['name'];
    $bio = $props['bio'];

    $inputService->checkRequiredFields([$name, $bio]);
    $inputService->validateArtistBio($bio);

    $songs = [$props['song1'], $props['song2'], $props['song3']];
    $albums = [$props['album1'], $props['album2'], $props['album3']];

    $inputService->validateAlbums($albums);
    $inputService->validateSongs($songs);

    $headerImgPath = $inputService->validateAndUploadImage('header_img', 'jazz/artists');
    $artistImg1Path = $inputService->validateAndUploadImage('artist_img1', 'jazz/artists');
    $artistImg2Path = $inputService->validateAndUploadImage('artist_img2', 'jazz/artists');
    $performanceImgPath = $inputService->validateAndUploadImage('performance_img', 'jazz/performances');

    $jazzService->createArtist($name, $bio, $headerImgPath, $artistImg1Path, $artistImg2Path, $performanceImgPath, $songs, $albums);

    Route::redirect('/artists/manageArtists');
}, Method::POST);
