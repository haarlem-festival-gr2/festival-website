<?php

use Core\Route\Route;
use Service\RestaurantService;

require_once __DIR__ . '/../repository/BaseRepository.php';
require_once __DIR__ . '/../service/RestaurantService.php';

Route::serve('/restaurant', function (array $props) {
    $restaurantId = $_GET['restaurant_id'] ?? null;

    $restaurantService = new RestaurantService();
    $totalRestaurants = count($restaurantService->getAllRestaurants());

    if (!is_numeric($restaurantId)) {
        $restaurantId = 1;
    } else {
        if ($restaurantId < 1 || $restaurantId > $totalRestaurants) {
            $restaurantId = 1;
        }
    }

    $restaurant = $restaurantService->getRestaurantById($restaurantId);
    $sessions = $restaurantService->getSessionsByRestaurantId($restaurantId);
    $yummyEventDays = $restaurantService->getYummyEventDays();

    $restaurantSessions = [];
    foreach ($yummyEventDays as $yummyEventDay) {
        $dayOfWeek = date('l', strtotime($yummyEventDay->Date)); // Make more use of models to pass along information / data

        $sessionsForDay = array_filter($sessions, function ($session) use ($yummyEventDay) {
            return $session->getDayID() === $yummyEventDay->getDayID();
        });
        $restaurantSessions[] = [
            'date' => $yummyEventDay->Date,
            'day' => $dayOfWeek,
            'sessions' => $sessionsForDay,
        ];
    }

    Route::render('restaurant.restaurant', [
        'restaurant' => $restaurant,
        'restaurantSessions' => $restaurantSessions,
    ]);
});