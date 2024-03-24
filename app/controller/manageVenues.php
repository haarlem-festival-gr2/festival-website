<?php

use Core\Route\Method;
use Core\Route\Route;
use service\JazzService;

require_once __DIR__.'/../service/JazzService.php';

Route::serve('/manageVenues', function (array $props) {
    $jazzService = new JazzService();

    $venues = $jazzService->getAllVenues();
    Route::render('admin.jazz.manage.venues', [
        'venues' => $venues,
    ]);
}, Method::GET);


Route::serve('/manageVenues', function (array $props) {
    $jazzService = new JazzService();

    try {
        $jazzService->deleteVenue($props['id']);
    } catch (Exception $e) {
        echo "<div class='error bg-red-100 border-l-4 border-red-500 text-red-700 p-4 m-4' role='alert'>{$e->getMessage()}</div>";
        return;
    }

    Route::redirect('/manageVenues');
}, Method::POST);