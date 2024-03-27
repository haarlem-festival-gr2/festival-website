<?php

use Core\Route\Method;
use Core\Route\Route;
use Service\ImageService;
use service\JazzService;

require_once __DIR__.'/../service/JazzService.php';
require_once __DIR__.'/../service/ImageService.php';

Route::serve('/createArtist', function (array $props) {
    Route::render('admin.jazz.create.artist', []);
}, Method::GET);

Route::serve('/createArtist', function (array $props) {
    $jazzService = new JazzService();
    $imageService = new ImageService();

    $name = $props['name'];
    $bio = $props['bio'];

    if ( empty($name) || empty($bio)){
        $error = 'All fields marked with * are required.';
        echo "<div class='error bg-red-100 border-l-4 border-red-500 text-red-700 p-4 m-4' id='error' role='alert'>$error</div>";
        return;
    }
    $songs = [$_POST['song1'] ?? null, $_POST['song2'] ?? null, $_POST['song3'] ?? null,];
    $albums = [$_POST['album1'] ?? null, $_POST['album2'] ?? null, $_POST['album3'] ?? null,];

    $imageService = new ImageService();

    if (isset($_FILES['header_img']) && $_FILES['header_img']['error'] === UPLOAD_ERR_OK) {
        $headerImgPath = $imageService->uploadImage($_FILES['header_img'], 'jazz/artists');
    } else {
        $error = 'Please upload an image.';
        echo "<div class='error bg-red-100 border-l-4 border-red-500 text-red-700 p-4 m-4' id='error' role='alert'>$error</div>";
        return;
    }

    if (isset($_FILES['artist_img1']) && $_FILES['artist_img1']['error'] === UPLOAD_ERR_OK) {
        $artistImg1Path = $imageService->uploadImage($_FILES['artist_img1'], 'jazz/artists');
    } else {
        $error = 'Please upload an image.';
        echo "<div class='error bg-red-100 border-l-4 border-red-500 text-red-700 p-4 m-4' id='error' role='alert'>$error</div>";
        return;
    }

    if (isset($_FILES['artist_img2']) && $_FILES['artist_img2']['error'] === UPLOAD_ERR_OK) {
        $artistImg2Path = $imageService->uploadImage($_FILES['artist_img2'], 'jazz/artists');
    } else {
        $error = 'Please upload an image.';
        echo "<div class='error bg-red-100 border-l-4 border-red-500 text-red-700 p-4 m-4' id='error' role='alert'>$error</div>";
        return;
    }

    if (isset($_FILES['performance_img']) && $_FILES['performance_img']['error'] === UPLOAD_ERR_OK) {
        $performanceImgPath = $imageService->uploadImage($_FILES['performance_img'], 'jazz/performances');
    } else {
        $error = 'Please upload an image.';
        echo "<div class='error bg-red-100 border-l-4 border-red-500 text-red-700 p-4 m-4' id='error' role='alert'>$error</div>";
        return;
    }

    $jazzService->createArtist($name, $bio, $headerImgPath, $artistImg1Path, $artistImg2Path, $performanceImgPath, $songs, $albums);

    Route::redirect('/manageArtists');
}, Method::POST);