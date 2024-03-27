<?php

use Core\Route\Method;
use Core\Route\Route;
use Service\ImageService;
use service\JazzService;

require_once __DIR__.'/../service/JazzService.php';
require_once __DIR__.'/../service/ImageService.php';

Route::serve('/createJazzDay', function (array $props) {
    $jazzService = new JazzService();
    $venues = $jazzService->getAllVenues();

    Route::render('admin.jazz.create.day', [
        'venues' => $venues,
    ]);
}, Method::GET);


Route::serve('/createJazzDay', function (array $props) {
    $jazzService = new JazzService();

    $date = $props['date'];
    $venueId = $props['venue'];
    $note = $props['note'];

    if ( empty($date) || empty($venueId)){
        $error = 'All fields marked with * are required.';
        echo "<div class='error bg-red-100 border-l-4 border-red-500 text-red-700 p-4 m-4' id='error' role='alert'>$error</div>";
        return;
    }

    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        try {
            $imageService = new ImageService();
            $imgPath = $imageService->uploadImage($_FILES['image'], 'jazz');
            $jazzService->createJazzDay($date, $venueId, $note, $imgPath);
        } catch (Exception $e) {
            echo "<div class='error bg-red-100 border-l-4 border-red-500 text-red-700 p-4 m-4' role='alert'>{$e->getMessage()}</div>";
            return;
        }
    } else{
        $error = 'Please upload an image.';
        echo "<div class='error bg-red-100 border-l-4 border-red-500 text-red-700 p-4 m-4' id='error' role='alert'>$error</div>";
        return;
    }

    Route::redirect('/manageJazzDays');
}, Method::POST);
