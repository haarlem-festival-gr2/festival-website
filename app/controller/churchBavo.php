<?php

use Core\Route\Route;
use Service\HistoryService;

require_once __DIR__.'/../service/HistoryService.php';

Route::serve('/churchBavo', function (array $props) {
    $historyService = new HistoryService();

    $homeInfo = $historyService->getHomeInformation();
    $locations = $historyService->getLocations();

    $detailPageId = 1;

    $detailPage = $historyService->getDetailPageById($detailPageId);
    $stories = $historyService->getStoriesByDetailPageId($detailPageId);
    // var_dump($stories);

    $allDetailPages = $historyService->getAllDetailPages();

    Route::render('history.churchBavo', [
        'detailPage' => $detailPage,
        'stories' => $stories,
        'locations' => $locations,
        'homeInfo' => $homeInfo,
        'allDetailPages' => $allDetailPages,
    ]);

    // Route::serve('/molenDeAdriaan', function (array $props) {
    //     Route::render('history.molenDeAdriaan', []);
});
