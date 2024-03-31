<?php

use Core\Route\Route;
use Repository\ScannerRepository;

Route::serve("/scan", function($props) {
    $repo = new ScannerRepository();

    $id = @$_GET['id'];

    if ($id === null) {
        echo "Invalid ticket id";
        exit;
    }

    $user = Route::auth();

    if ($user === false || $user->Role != 'employee') {
        echo "You are not authorized to view this page";
        exit;
    }

    try {
        $ticket = $repo->get_from_uuid($id);
        $repo->mark_scanned($id);

        if ($ticket["IsScanned"] == 1) {
            echo "<p style='color:yellow;background-color:red;font-weight:bold;font-size:2rem;'>
            Warning: Ticket has been scanned before!!</p>";
        }

        $sdt = new DateTime($ticket['StartDateTime']);
        $startDate = $sdt->format('d / m / Y');
        $startTime = $sdt->format('H:i');

        $edt = new DateTime($ticket['EndDateTime']);
        $endDate = $edt->format('d / m / Y');
        $endTime = $edt->format('H:i');

        echo 'Customer name: ' . $ticket['CustomerName'] . '<br>';
        echo 'Event: ' . $ticket['Type'] . ' - ' . $ticket['EventName'] . '<br>';
        echo 'Quantity: ' . $ticket['Quantity']. '<br>';
        echo 'Venue: ' . $ticket['Venue'] . '<br>';
        echo 'Start Date: ' . $startDate . '<br>';
        echo 'Start Time: ' . $startTime . '<br>';
        echo 'End Date: ' . $endDate . '<br>';
        echo 'End Time: ' . $endTime . '<br>';
        echo 'Note: ' . $ticket['Note'] . '<br>';
    } catch (Exception $e) {
        echo "TICKET NOT FOUND";
    }
});
