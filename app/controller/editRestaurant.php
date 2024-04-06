<?php

use Core\Route\Route;
use Service\RestaurantService;

require_once __DIR__ . '/../repository/BaseRepository.php';
require_once __DIR__ . '/../service/RestaurantService.php';

Route::serve('/editRestaurant', function (array $props) {
    $errorMessage = '';
    $restaurant = null;

    if (isset ($_GET['id'])) {
        $restaurantID = (int) $_GET['id'];

        $restaurantService = new RestaurantService();
        $restaurant = $restaurantService->getRestaurantByID($restaurantID);

        if ($restaurant) {
            Route::render('admin.yummy.editRestaurant', [
                'restaurant' => $restaurant,
            ]);
            return;
        } else {
            $errorMessage = 'Restaurant not found';
        }
    }

    Route::render('admin.yummy.editRestaurant', [
        'restaurant' => $restaurant,
        'errorMessage' => $errorMessage,
    ]);
});
