<?php

use Core\Route\Method;
use Core\Route\Route;
use service\JazzService;

require_once __DIR__ . '/../../service/JazzService.php';

$jazzService = new JazzService();

Route::serve('/performances/managePerformances', function (array $props) use($jazzService) {
    $performances = $jazzService->getAllPerformances();

    Route::render('admin.jazz.manage.performances', [
        'performances' => $performances,
    ]);
});


Route::serve('/performances/managePerformances', function (array $props) use($jazzService) {
    $jazzService->deletePerformance($props['id']);

    Route::redirect('/performances/managePerformances');
}, Method::POST);
