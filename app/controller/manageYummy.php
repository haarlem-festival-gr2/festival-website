<?php

use Core\Route\Route;
use Service\RestaurantService;
use model\Restaurant; 

require_once __DIR__.'/../repository/BaseRepository.php';
require_once __DIR__.'/../service/RestaurantService.php';
require_once __DIR__.'/../model/Restaurant.php'; 

Route::serve('/manageYummy', function (array $props) {
    $restaurantService = new RestaurantService();

    $restaurants = $restaurantService->getAllRestaurants();
    $yummies = $restaurantService->getAllYummy();

    // Dynamically fetch the properties of the Restaurant model
    $restaurantFields = array_keys(get_class_vars(Restaurant::class));

    Route::render('admin.yummy.manageYummy', [
        'restaurants' => $restaurants,
        'yummies' => $yummies[0],
        'restaurantFields' => $restaurantFields,
    ]);
});