<?php

use Core\Route\Method;
use Core\Route\Route;
use service\JazzService;

require_once __DIR__.'/../service/JazzService.php';

Route::serve('/test', function (array $props) {
    $jazzService = new JazzService();

    $venues = $jazzService->getAllVenues();
    Route::render('admin.jazz.manageTest', [
        'venues' => $venues,
    ]);
}, Method::GET);

