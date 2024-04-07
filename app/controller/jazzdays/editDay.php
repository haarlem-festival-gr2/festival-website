<?php

use Core\Route\Method;
use Core\Route\Route;
use Service\ImageService;
use service\JazzService;
use Service\ValidateInputService;

require_once __DIR__ . '/../../service/JazzService.php';
require_once __DIR__ . '/../../service/ValidateInputService.php';

$jazzService = new JazzService();

Route::serve('/jazzdays/editDay', function (array $props) use ($jazzService) {
    if(!isset($props['id'])) {
        Route::redirect('/jazzdays/manageDays');
    }

    $dayId = $props['id'];
    $day = $jazzService->getJazzDayById($dayId);
    $venues = $jazzService->getAllVenues();

    Route::render('admin.jazz.edit.day', [
        'day' => $day,
        'venues' => $venues,
    ]);
}, Method::GET);


Route::serve('/jazzdays/editDay', function (array $props) use ($jazzService)    {
    $validateInputService = new ValidateInputService();

    $dayId = $props['id'];
    $date = $props['date'];
    $venueId = $props['venue'];
    $note = $props['note'];

    $validateInputService->checkRequiredFields([$date, $venueId]);
    $imgPath = $validateInputService->updateImage('image', 'jazz');

    $jazzService->updateJazzDay($dayId, $date, $venueId, $note, $imgPath);

    Route::redirect('/jazzdays/manageDays');
}, Method::POST);
