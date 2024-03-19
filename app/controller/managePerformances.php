<?php

use Core\Route\Route;
use service\JazzService;

require_once __DIR__.'/../service/JazzService.php';

Route::serve('/managePerformances', function (array $props) {
    $jazzService = new JazzService();
    $performances = $jazzService->getAllPerformances();

    Route::render('admin.jazz.managePerformances', [
        'performances' => $performances,
    ]);
});

