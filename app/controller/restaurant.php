<?php

use Core\Route\Route;
use Service\RestaurantService;

require_once __DIR__.'/../repository/BaseRepository.php';
require_once __DIR__.'/../service/RestaurantService.php';

Route::serve('/restaurant', function (array $props) {
    $restaurantId = $_GET['restaurant_id'] ?? null;

    $restaurantService = new RestaurantService();
    $totalRestaurants = count($restaurantService->getAllRestaurants());

    $restaurant = $restaurantService->getRestaurantById($restaurantId);
    $sessions = $restaurantService->getSessionsByRestaurantId($restaurantId);
    $yummyEventDays = $restaurantService->getAllYummyEventDays();

    $restaurantSessions = [];
    foreach ($yummyEventDays as $yummyEventDay) {
        $dayOfWeek = date('l', strtotime($yummyEventDay->Date));

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
