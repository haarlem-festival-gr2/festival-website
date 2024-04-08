<?php

use Core\Route\Method;
use Core\Route\Route;
use service\JazzService;

require_once __DIR__.'/../../service/JazzService.php';

$jazzService = new JazzService();

Route::serve('/venues/manageVenues', function (array $props) use ($jazzService) {
    $venues = $jazzService->getAllVenues();
    Route::render('admin.jazz.manage.venues', [
        'venues' => $venues,
    ]);
}, Method::GET);

Route::serve('/venues/manageVenues', function (array $props) use ($jazzService) {
    if (isset($props['id'])) {
        try {
            $jazzService->deleteVenue($props['id']);
        } catch (Exception $e) {
            echo "<script>alert('".addslashes($e->getMessage())."');</script>";

            return;
        }
    }

    Route::redirect('/venues/manageVenues');
}, Method::POST);
