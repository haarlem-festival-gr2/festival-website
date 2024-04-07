<?php

use Core\Route\ErrorCode;
use Core\Route\Route;
use Service\SoldTicketService;

Route::serve("/scan", function($props) {
    // not authenticated
    $role = @Route::auth()->Role;
    if ($role !== 'admin' && $role !== 'employee') {
        Route::error(ErrorCode::NOT_FOUND);
        exit;
    }

    $service = new SoldTicketService();

    $id = @$_GET['id'];

    if ($id === null) {
        echo "Use your camera app to scan tickets";
        exit;
    }

    $user = Route::auth();

    try {
        $ticket = $service->getByUUID($id);
        $service->markScanned($ticket);

        if ($ticket->IsScanned == 1) {
            echo "<p style='color:yellow;background-color:red;font-weight:bold;font-size:2rem;'>
            Warning: Ticket has been scanned before!!</p>";
        }

        $sdt = new DateTime($ticket->StartDateTime);
        $startDate = $sdt->format('d / m / Y');
        $startTime = $sdt->format('H:i');

        $edt = new DateTime($ticket->EndDateTime);
        $endDate = $edt->format('d / m / Y');
        $endTime = $edt->format('H:i');

        echo 'Customer name: ' . $ticket->CustomerName . '<br>';
        echo 'Event: ' . $ticket->Type . ' - ' . $ticket->EventName . '<br>';
        echo 'Quantity: ' . $ticket->Quantity . '<br>';
        echo 'Venue: ' . $ticket->Venue . '<br>';
        echo 'Start Date: ' . $startDate . '<br>';
        echo 'Start Time: ' . $startTime . '<br>';
        echo 'End Date: ' . $endDate . '<br>';
        echo 'End Time: ' . $endTime . '<br>';
        echo 'Note: ' . $ticket->Note . '<br>';
    } catch (Exception $e) {
        echo "TICKET NOT FOUND";
    }
});
