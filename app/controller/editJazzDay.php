<?php

use Core\Route\Method;
use Core\Route\Route;
use Service\ImageService;
use service\JazzService;

require_once __DIR__.'/../service/JazzService.php';
require_once __DIR__.'/../service/ImageService.php';

Route::serve('/editJazzDay', function (array $props) {
    $jazzService = new JazzService();
    $dayId = $props['id'];
    $day = $jazzService->getJazzDayById($dayId);
    $venues = $jazzService->getAllVenues();

    Route::render('admin.jazz.edit.day', [
        'day' => $day,
        'venues' => $venues,
    ]);
}, Method::GET);


Route::serve('/editJazzDay', function (array $props) {
    $jazzService = new JazzService();

    $dayId = $props['id'];
    $date = $props['date'];
    $venueId = $props['venue'];
    $note = $props['note'];

    if ( empty($date) || empty($venueId)) {
        $error = 'All fields marked with * are required.';
        echo "<div class='error bg-red-100 border-l-4 border-red-500 text-red-700 p-4 m-4' id='error' role='alert'>$error</div>";
        return;
    }

    $imgPath = null;
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        try {
            $imageService = new ImageService();
            $imgPath = $imageService->uploadImage($_FILES['image'], 'jazz');
        } catch (Exception $e) {
            echo "<div class='error bg-red-100 border-l-4 border-red-500 text-red-700 p-4 m-4' role='alert'>{$e->getMessage()}</div>";
            return;
        }
    }
    $jazzService->updateJazzDay($dayId, $date, $venueId, $note, $imgPath);

    Route::redirect('/manageJazzDays');
}, Method::POST);
