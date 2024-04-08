<?php

use Core\Route\Route;
use model\Session;
use model\YummyEventDays;
use Service\RestaurantService;

require_once __DIR__.'/../repository/BaseRepository.php';
require_once __DIR__.'/../service/RestaurantService.php';
require_once __DIR__.'/../model/Session.php';
require_once __DIR__.'/../model/YummyEventDays.php';

Route::serve('/manageSchedule', function (array $props) {
    $restaurantService = new RestaurantService();

    $sessions = $restaurantService->getAllSessions();
    $yummyEventDays = $restaurantService->getAllYummyEventDays();

    $sessionFields = array_keys(get_class_vars(Session::class));
    $yummyEventDayFields = array_keys(get_class_vars(YummyEventDays::class));

    Route::render('admin.yummy.manageSchedule', [
        'sessions' => $sessions,
        'yummyEventDays' => $yummyEventDays,
        'sessionFields' => $sessionFields,
        'yummyEventDayFields' => $yummyEventDayFields,
    ]);
});
