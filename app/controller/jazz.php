<?php

use Core\Route\Route;
use service\FestivalEventService;
use service\JazzService;

require_once __DIR__.'/../service/FestivalEventService.php';
require_once __DIR__.'/../service/JazzService.php';

Route::serve('/jazz', function (array $props) {
    $festivalEventService = new FestivalEventService();
    $jazzService = new JazzService();

    $festivalEvent = $festivalEventService->getFestivalEventByName('Haarlem Jazz');
    $eventDays = $jazzService->getEventDaysWithDetails();

    Route::render('jazz.overview.main', [
        'festivalEvent' => $festivalEvent,
        'eventDays' => $eventDays,
    ]);
});
