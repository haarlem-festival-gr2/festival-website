<?php

use Core\Route\Route;
use Service\HistoryService;

require_once __DIR__.'/../service/HistoryService.php';

Route::serve('/historyDetail', function (array $props) {
    $historyService = new HistoryService();

    $homeInfo = $historyService->getHomeInformation();
    $locations = $historyService->getLocations();

    $id = @$props['id'];

    if ($id === null) {
        http_response_code(422);
        echo '422 Unprocessable Entity';
    }

    $detailPageId = $id;

    $detailPage = $historyService->getDetailPageById($detailPageId);
    $stories = $historyService->getStoriesByDetailPageId($detailPageId);
    $name = $historyService->getNameFromId($detailPageId);

    $allDetailPages = $historyService->getAllDetailPages();

    Route::render('history.detail', [
        'detailPage' => $detailPage,
        'stories' => $stories,
        'locations' => $locations,
        'homeInfo' => $homeInfo,
        'allDetailPages' => $allDetailPages,
        'name' => $name,
    ]);
});
