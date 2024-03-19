<?php

use Core\Route\Route;
use service\FestivalEventService;
use service\JazzService;

require_once __DIR__.'/../service/FestivalEventService.php';
require_once __DIR__.'/../service/JazzService.php';

Route::serve('/jazz', function (array $props) {
    $festivalEventService = new FestivalEventService();
    $jazzService = new JazzService();

    $user = Route::auth();

    $festivalEvent = $festivalEventService->getFestivalEventByName('Haarlem Jazz');
    $eventDays = $jazzService->getEventDaysWithDetails();

    //if (!$user) {
    //   Route::redirect('/login');
    //}

    Route::render('jazz.jazz', [
        'festivalEvent' => $festivalEvent,
        'eventDays' => $eventDays,
        'user' => $user,
    ]);
});
