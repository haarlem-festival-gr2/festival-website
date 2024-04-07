<?php

use Core\Route\Route;
use service\HistoryService;

require_once __DIR__.'/../service/HistoryService.php';

Route::serve('/history', function (array $props) {
    $historyService = new HistoryService();

    $homeInfo = $historyService->getHomeInformation();
    $locations = $historyService->getLocations();

    $dayNames = $historyService->getDayNames();

    $dayID = 1;
    $ticketsInfo = $historyService->getTicketsByDay($dayID);

    $dataGetter = function ($dayID) use ($historyService) {
        return $historyService->getTicketsByDay($dayID);
    };

    // I get day names from the database
    $historyDays = $historyService->getHistoryDays();
    $dayNames = array_column($historyDays, 'DayOfTheWeek');

    // I pass the day names to the view
    $props['dayNames'] = $dayNames;

    $date1 = new DateTime($ticketsInfo[0]->StartDateTime);
    $date2 = new DateTime($ticketsInfo[1]->StartDateTime);
    $date3 = new DateTime($ticketsInfo[2]->StartDateTime);
    $date4 = new DateTime($ticketsInfo[3]->StartDateTime);

    Route::render('history.history', [
        'firstTicket' => $dataGetter(1),
        'secondTicketDay2' => $dataGetter(2),
        'thirdTicketDay3' => $dataGetter(3),
        'fourthTicketDay4' => $dataGetter(4),
        'firstTicketDate' => $date1->format('jS F Y'),
        'secondTicketDate' => $date2->format('jS F Y'),
        'thirdTicketDate' => $date3->format('jS F Y'),
        'fourthTicketDate' => $date4->format('jS F Y'),
        'ticketsInfo' => $ticketsInfo[0],
        'ticketsInfo2' => $ticketsInfo[1],
        'locations' => $locations,
        'homeInfo' => $homeInfo,
        'dayNames' => $dayNames,

    ]);
});
