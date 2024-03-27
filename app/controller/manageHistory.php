<?php

use Core\Route\Route;
use service\HistoryService;

require_once __DIR__.'/../service/HistoryService.php';

Route::serve('/history', function (array $props) {
    $historyService = new HistoryService();

    $homeInfo = $historyService->getHomeInformation();
    $days = $historyService->getHistoryDays();
    $languages = $historyService->getHistoryLanguages();
    $locations = $historyService->getLocations();

    // $ticketsInfo = $historyService->getTicketsByDay();

    Route::render('history.history', [
        'homeInfo' => $homeInfo,
        'days' => $days,
        'languages' => $languages,
        'locations' => $locations,
        // 'ticketsInfo' => $ticketsInfo,
    ]);
});
