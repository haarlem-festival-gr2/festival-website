<?php

use Core\Route\Route;
use service\FestivalEventService;
use service\JazzService;

require_once __DIR__.'/../repository/BaseRepository.php';
require_once __DIR__.'/../service/FestivalEventService.php';
require_once __DIR__.'/../service/JazzService.php';

Route::serve('/jazz', function (array $props) {
    $festivalEventService = new FestivalEventService();
    $jazzService = new JazzService();

    $user = Route::auth();

    $festivalEvent = $festivalEventService->getFestivalEventByName('Haarlem Jazz');
    $jazzDays = $jazzService->getAllJazzDays();

    $jazzDaysWithPerformances = [];

    foreach ($jazzDays as $day) {
        $performancesForDay = $jazzService->getPerformancesByJazzDay($day->getDayId());
        $venue = $jazzService->getVenueById($day->getVenueID());
        $jazzPasses = $jazzService->getJazzPassesByDate($day->getDate());
        $jazzDaysWithPerformances[] = [
            'day' => $day,
            'venue' => $venue,
            'performances' => $performancesForDay,
            'passes' => $jazzPasses,
        ];
    }

    //if (!$user) {
    //   Route::redirect('/login');
    //}

    Route::render('jazz.jazz', [
        'festivalEvent' => $festivalEvent,
        'jazzDaysWithPerformances' => $jazzDaysWithPerformances,
        'user' => $user,
    ]);
});
