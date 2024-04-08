<?php

use Core\Route\Method;
use Core\Route\Route;
use Model\HistoryTicket;
use Repository\HistoryRepository;
use Service\HistoryService;

require_once __DIR__.'/../repository/HistoryRepository.php';
require_once __DIR__.'/../service/HistoryService.php';
require_once __DIR__.'/../model/HistoryTicket.php';

Route::serve('/editTicketHistory', function (array $props) {
    if (! isset($_GET['ticketId'])) {
        header('Location: /errorPage');
        exit();
    }

    $ticketId = $_GET['ticketId'];

    $historyRepository = new HistoryRepository();
    $ticket = $historyRepository->getTicketById($ticketId);

    Route::render('admin.history.editTicketHistory', ['ticket' => $ticket]);
});

Route::serve('/editTicketHistory', function (array $props) {
    $ticketId = $_POST['ticketId'] ?? 0;
    $name = $_POST['name'] ?? '';
    $dayId = $_POST['day_id'] ?? 0;
    $languageId = $_POST['language_id'] ?? 0;
    $startDateTime = $_POST['start_date_time'] ?? '';
    $endDateTime = $_POST['end_date_time'] ?? '';
    $totalTickets = $_POST['total_tickets'] ?? 0;
    $remainingTickets = $_POST['remaining_tickets'] ?? 0;

    //var_dump($_POST);

    $ticketId = (int) $ticketId;
    $languageId = (int) $languageId;
    $totalTickets = (int) $totalTickets;
    $remainingTickets = (int) $remainingTickets;

    $dayId = (int) $dayId;

    // Create a new ticket object with updated data
    $ticket = new HistoryTicket();
    $ticket->TourID = $ticketId;
    $ticket->Name = $name;
    $ticket->DayID = $dayId;
    $ticket->LanguageID = $languageId;
    $ticket->StartDateTime = $startDateTime;
    $ticket->EndDateTime = $endDateTime;
    $ticket->TotalTickets = $totalTickets;
    $ticket->RemainingTickets = $remainingTickets;

    // Update ticket details
    $historyService = new HistoryService();
    $success = $historyService->updateTicket($ticket);

    if ($success) {
        header('Location: /manageHistoryPage');
        exit();
    } else {
        header('Location: /ticketUpdateFailed');
        exit();
    }
}, Method::POST);
