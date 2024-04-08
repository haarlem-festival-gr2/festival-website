<?php

use Core\Route\Route;
use Service\RestaurantService;

require_once __DIR__.'/../repository/BaseRepository.php';
require_once __DIR__.'/../service/RestaurantService.php';

Route::serve('/editSession', function (array $props) {
    $errorMessage = '';
    $session = null;

    if (isset($_GET['id'])) {
        $sessionID = (int) $_GET['id'];

        $restaurantService = new RestaurantService();
        $session = $restaurantService->getSessionById($sessionID);

        if ($session) {
            Route::render('admin.yummy.editSession', [
                'session' => $session,
            ]);

            return;
        } else {
            $errorMessage = 'Session not found';
        }
    }

    Route::render('admin.yummy.editSession', [
        'session' => $session,
        'errorMessage' => $errorMessage,
    ]);
});
