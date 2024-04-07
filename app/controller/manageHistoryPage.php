<?php

use Core\Route\Route;
use service\HistoryService;
use Model\HistoryTicket;
use Core\Route\Method;

require_once __DIR__ . '/../service/HistoryService.php';

Route::serve('/manageHistoryPage', function (array $props) {
    $historyService = new HistoryService();

    $locations = $historyService->getLocations();
    $dayNames = $historyService->getDayNames();
    $historyDays = $historyService->getHistoryDays();

    // Assuming you want to fetch tickets for all days
    $ticketsByDay = [];
    foreach ($historyDays as $day) {
        $ticketsByDay[$day->DayID] = $historyService->getTicketsByDay($day->DayID);
    }

    // Check if the request method is POST and if the form to add a new ticket was submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset ($_POST['name'], $_POST['tour_id'], $_POST['day_id'], $_POST['language_id'], $_POST['start_date_time'], $_POST['end_date_time'], $_POST['total_tickets'], $_POST['remaining_tickets'])) {
        // Create a new ticket object with the form data
        $newTicket = new HistoryTicket();
        $newTicket->Name = $_POST['name'];
        $newTicket->TourID = $_POST['tour_id'];
        $newTicket->DayID = $_POST['day_id'];
        $newTicket->LanguageID = $_POST['language_id'];
        $newTicket->StartDateTime = $_POST['start_date_time'];
        $newTicket->EndDateTime = $_POST['end_date_time'];
        $newTicket->TotalTickets = $_POST['total_tickets'];

        $newTicket->RemainingTickets = $_POST['remaining_tickets'];

        // Add the new ticket to the list of tickets for the corresponding day
        if (isset ($ticketsByDay[$newTicket->DayID])) {
            $ticketsByDay[$newTicket->DayID][] = $newTicket;
        } else {
            $ticketsByDay[$newTicket->DayID] = [$newTicket];
        }
    }

    // Handle ticket deletion
    // if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset ($_POST['delete_ticket_id'])) {
    //     $ticketId = $_POST['delete_ticket_id'];
    //     $success = $historyService->deleteTicket($ticketId);

    //     // Redirect after deletion
    //     header("Location: /manageHistoryPage");
    //     exit ();
    // }
    if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset ($_GET['deleteTicket'])) {
        $ticketId = $_GET['deleteTicket'];
        $success = $historyService->deleteTicket((int) $ticketId);

        // Optionally, you might want to implement some feedback mechanism to the user
        // Redirect back to the same page after deletion
        header("Location: /manageHistoryPage");
        exit;
    }

    Route::render('admin.history.manageHistoryPage', [
        'ticketsByDay' => $ticketsByDay,
        'locations' => $locations,
        'dayNames' => $dayNames,
    ]);
}, Method::GET);