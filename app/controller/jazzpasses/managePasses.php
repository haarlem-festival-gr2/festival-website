<?php

use Core\Route\Method;
use Core\Route\Route;
use service\JazzService;

require_once __DIR__ . '/../../service/JazzService.php';
require_once __DIR__ . '/../../service/ValidateInputService.php';

$jazzService = new JazzService();

Route::serve('/jazzpasses/managePasses', function (array $props) use ($jazzService) {

    $passes = $jazzService->getAllJazzPasses();
    Route::render('admin.jazz.manage.passes', [
        'passes' => $passes,
    ]);
}, Method::GET);


Route::serve('/jazzpasses/managePasses', function (array $props) use ($jazzService) {
    if(isset($props['id'])) {
        $jazzService->deletePass($props['id']);
    }

    Route::redirect('/jazzpasses/managePasses');
}, Method::POST);

