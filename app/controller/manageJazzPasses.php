<?php

use Core\Route\Method;
use Core\Route\Route;
use service\JazzService;

require_once __DIR__.'/../service/JazzService.php';

Route::serve('/manageJazzPasses', function (array $props) {
    $jazzService = new JazzService();

    $passes = $jazzService->getAllJazzPasses();
    Route::render('admin.jazz.manage.passes', [
        'passes' => $passes,
    ]);
}, Method::GET);

Route::serve('/manageJazzPasses', function (array $props) {
    $jazzService = new JazzService();

    $jazzService->deletePass($props['id']);

    Route::redirect('/manageJazzPasses');
}, Method::POST);
