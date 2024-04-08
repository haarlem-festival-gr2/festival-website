<?php

use Core\Route\Route;
use Service\RestaurantService;

require_once __DIR__.'/../repository/BaseRepository.php';
require_once __DIR__.'/../service/RestaurantService.php';

Route::serve('/editYummyEventDay', function (array $props) {
    $errorMessage = '';
    $yummyEventDay = null;

    if (isset($_GET['id'])) {
        $dayID = (int) $_GET['id'];

        $restaurantService = new RestaurantService();
        $yummyEventDay = $restaurantService->getYummyEventDayById($dayID);

        if ($yummyEventDay) {
            Route::render('admin.yummy.editYummyEventDay', [
                'yummyEventDay' => $yummyEventDay,
            ]);

            return;
        } else {
            $errorMessage = 'Yummy Event Day not found';
        }
    }

    Route::render('admin.yummy.editYummyEventDay', [
        'yummyEventDay' => $yummyEventDay,
        'errorMessage' => $errorMessage,
    ]);
});
