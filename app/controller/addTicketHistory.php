<?php

use Core\Route\Method;
use Core\Route\Route;
use Service\HistoryService;

require_once __DIR__.'/../service/HistoryService.php';

Route::serve('/addTicketHistory', function () {
    $historyService = new HistoryService();
    $locations = $historyService->getLocations();
    $dayNames = $historyService->getDayNames();
    $errorMessage = '';

    Route::render('admin.history.addTicketHistory', [
        'locations' => $locations,
        'dayNames' => $dayNames,
        'errorMessage' => $errorMessage,
    ]);
}, Method::GET);

Route::serve('/addTicketHistory', function () {
    $historyService = new HistoryService();

    $name = $_POST['name'] ?? '';
    $tourID = $_POST['tour_id'] ?? 0;
    $dayID = $_POST['day_id'] ?? 0;
    $languageID = $_POST['language_id'] ?? 0;
    $startDateTime = $_POST['start_date_time'] ?? '';
    $endDateTime = $_POST['end_date_time'] ?? '';
    $totalTickets = $_POST['total_tickets'] ?? 0;

    $RemainingTickets = $_POST['remaining_tickets'] ?? 0;

    $success = $historyService->addTicket($name, (int) $tourID, (int) $dayID, (int) $languageID, $startDateTime, $endDateTime, (int) $totalTickets, (int) $RemainingTickets);

    if ($success) {
        header('Location: /manageHistoryPage');
        exit();
    } else {
        echo 'Failed to add the ticket. Please try again.';
        exit();
    }
}, Method::POST);
