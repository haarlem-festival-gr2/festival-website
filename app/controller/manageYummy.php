<?php

use Core\Route\Route;
use Service\RestaurantService;

require_once __DIR__.'/../repository/BaseRepository.php';
require_once __DIR__.'/../service/RestaurantService.php';

Route::serve('/manageYummy', function (array $props) {
    $restaurantService = new RestaurantService();

    $restaurants = $restaurantService->getAllRestaurants();
    $yummies = $restaurantService->getAllYummy();

    Route::render('admin.yummy.manageYummy', [
        'restaurants' => $restaurants,
        'yummies' => $yummies[0],
    ]);
});
