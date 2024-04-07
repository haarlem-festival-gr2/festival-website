<?php

use Core\Route\Method;
use Core\Route\Route;
use Service\ImageService;
use service\JazzService;
use Service\ValidateInputService;

require_once __DIR__ . '/../../service/JazzService.php';
require_once __DIR__ . '/../../service/ValidateInputService.php';

$jazzService = new JazzService();

Route::serve('/jazzdays/createDay', function (array $props)use ($jazzService) {
    $venues = $jazzService->getAllVenues();

    Route::render('admin.jazz.create.day', [
        'venues' => $venues,
    ]);
}, Method::GET);


Route::serve('/jazzdays/createDay', function (array $props) use ($jazzService)  {
    $validateInputService = new ValidateInputService();

    $date = $props['date'];
    $venueId = $props['venue'];
    $note = $props['note'];

    $validateInputService->checkRequiredFields([$date, $venueId]);
    $imgPath = $validateInputService->validateAndUploadImage('image', 'jazz');

    $jazzService->createJazzDay($date, $venueId, $note, $imgPath);

    Route::redirect('/jazzdays/manageDays');
}, Method::POST);
