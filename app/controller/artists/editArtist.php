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

    $songs = [$_POST['song1'] ?? null, $_POST['song2'] ?? null, $_POST['song3'] ?? null];
    $albums = [$_POST['album1'] ?? null, $_POST['album2'] ?? null, $_POST['album3'] ?? null];

    $headerImgPath = $validateInputService->handleImageUpload('header_img', 'jazz/artists');
    $artistImg1Path = $validateInputService->handleImageUpload('artist_img1', 'jazz/artists');
    $artistImg2Path = $validateInputService->handleImageUpload('artist_img2', 'jazz/artists');
    $performanceImgPath = $validateInputService->handleImageUpload('performance_img', 'jazz/performances');

    $jazzService->updateArtist($id, $name, $bio, $songs, $albums, $headerImgPath, $artistImg1Path, $artistImg2Path, $performanceImgPath);

    Route::redirect('/artists/manageArtists');
}, Method::POST);
