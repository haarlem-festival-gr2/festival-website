<?php

use Core\Route\Route;
use Service\RestaurantService;

require_once __DIR__ . '/../repository/BaseRepository.php';
require_once __DIR__ . '/../service/RestaurantService.php';

Route::serve('/yummy', function (array $props) {
    $restaurantService = new RestaurantService();

    $restaurants = $restaurantService->getAllRestaurants();

    Route::render('yummy.yummy', [
        'restaurants' => $restaurants,
    ]);
});
