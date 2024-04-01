<?php

use Core\Route\Method;
use Core\Route\Route;
use Service\ImageService;
use service\JazzService;
use Service\ValidateInputService;

require_once __DIR__ . '/../../service/JazzService.php';
require_once __DIR__ . '/../../service/ValidateInputService.php';

Route::serve('/artists/createArtist', function (array $props) {
    Route::render('admin.jazz.create.artist',
        []);
}, Method::GET);


Route::serve('/artists/createArtist', function (array $props) {
    $jazzService = new JazzService();
    $inputService = new ValidateInputService();

    $name = $props['name'];
    $bio = $props['bio'];

    $inputService->checkRequiredFields([$name, $bio]);

    $songs = [$_POST['song1'] ?? null, $_POST['song2'] ?? null, $_POST['song3'] ?? null];
    $albums = [$_POST['album1'] ?? null, $_POST['album2'] ?? null, $_POST['album3'] ?? null];

    $headerImgPath = $inputService->checkAndUploadImage('header_img', 'jazz/artists');
    $artistImg1Path = $inputService->checkAndUploadImage('artist_img1', 'jazz/artists');
    $artistImg2Path = $inputService->checkAndUploadImage('artist_img2', 'jazz/artists');
    $performanceImgPath = $inputService->checkAndUploadImage('performance_img', 'jazz/performances');

    $jazzService->createArtist($name, $bio, $headerImgPath, $artistImg1Path, $artistImg2Path, $performanceImgPath, $songs, $albums);

    Route::redirect('/artists/manageArtists');
}, Method::POST);

