<?php

use Core\Route\Method;
use Core\Route\Route;
use service\JazzService;

require_once __DIR__.'/../service/JazzService.php';

Route::serve('/manageVenues', function (array $props) {
    $jazzService = new JazzService();

    $jazzDays = $jazzService->getAllJazzDays();
    Route::render('admin.jazz.manageDays', [
        'jazzDays' => $jazzDays,
    ]);
}, Method::GET);

Route::serve('/manageJazzDays', function (array $props) {
    $jazzService = new JazzService();

    if (isset($props['action'])) {
        switch ($props['action']) {
            case 'edit':
                if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
                    $image = $_FILES['image'];
                    $imgPath = $jazzService->uploadImage($image);
                    if (isset($props['jazzday_id'])) {
                        // Perform the update
                        $jazzDayId = $props['jazzday_id'];
                        $date = $props['date'];
                        $venueId = $props['venue_id'];
                        $note = $props['note'];
                        //$imgPath = $props['img_path'];
                        $jazzService->updateJazzDay($jazzDayId, $date, $venueId, $note, $imgPath);
                    }
                }
                break;
            case 'create':
                // Perform the creation
                if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
                    $image = $_FILES['image'];
                    $imgPath = $jazzService->uploadImage($image);
                    $jazzService->createJazzDay($props['date'], $props['venue_id'], $props['note'], $imgPath);
                }
                break;
            case 'delete':
                $jazzService->deleteJazzDay($props['jazzday_id']);
        }
    }
    Route::redirect('/manageDays');
}, Method::POST);