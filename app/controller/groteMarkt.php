<?php

use Core\Route\Route;
use Service\HistoryService;

require_once __DIR__ . '/../service/HistoryService.php';

Route::serve('/groteMarkt', function (array $props) {
    $historyService = new HistoryService();

    $homeInfo = $historyService->getHomeInformation();
    $locations = $historyService->getLocations();

    $detailPageId = 2;

    $detailPage = $historyService->getDetailPageById($detailPageId);
    $stories = $historyService->getStoriesByDetailPageId($detailPageId);


    $allDetailPages = $historyService->getAllDetailPages();

    Route::render('history.groteMarkt', [
        'detailPage' => $detailPage,
        'stories' => $stories,
        'locations' => $locations,
        'homeInfo' => $homeInfo,
        'allDetailPages' => $allDetailPages,
    ]);
});
