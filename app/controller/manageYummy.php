<?php

use Core\Route\Route;
use model\Restaurant;
use model\YummyHome;
use Service\RestaurantService;

require_once __DIR__.'/../repository/BaseRepository.php';
require_once __DIR__.'/../service/RestaurantService.php';
require_once __DIR__.'/../model/Restaurant.php';
require_once __DIR__.'/../model/YummyHome.php';

Route::serve('/manageYummy', function (array $props) {
    $restaurantService = new RestaurantService();

    $restaurants = $restaurantService->getAllRestaurants();
    $yummies = $restaurantService->getAllYummy();

    $restaurantFields = array_keys(get_class_vars(Restaurant::class));
    $yummyFields = array_keys(get_class_vars(YummyHome::class));

    Route::render('admin.yummy.manageYummy', [
        'restaurants' => $restaurants,
        'yummie' => $yummies[0],
        'restaurantFields' => $restaurantFields,
        'yummyFields' => $yummyFields,
    ]);
});
