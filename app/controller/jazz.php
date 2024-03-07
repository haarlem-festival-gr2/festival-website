<?php

use Core\Route\Method;
use Core\Route\Route;
use Repository\JazzRepository;

require_once __DIR__.'/../repository/BaseRepository.php';
require_once __DIR__.'/../repository/JazzRepository.php';
require_once __DIR__.'/../model/FestivalEvent.php';

Route::serve('/jazz', function (array $props) {
    $repo = new JazzRepository();

    $festivalEvent = $repo->getFestivalEventByName('Haarlem Jazz');
    $jazzDays = $repo->getAllJazzDays();

    $jazzDaysWithPerformances = [];

    foreach ($jazzDays as $day) {
        $performancesForDay = $repo->getPerformancesByJazzDay($day->getDayId());
        $venue = $repo->getVenueById($day->getVenueID());
        $jazzDaysWithPerformances[] = [
            'day' => $day,
            'venue' => $venue,
            'performances' => $performancesForDay,
        ];
    }

    Route::render('jazz', [
        'festivalEvent' => $festivalEvent,
        'jazzDaysWithPerformances' => $jazzDaysWithPerformances,
    ]);
});

