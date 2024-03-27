<?php

use Core\Route\Method;
use Core\Route\Route;
use service\JazzService;

require_once __DIR__.'/../service/JazzService.php';

Route::serve('/createPass', function (array $props) {
    Route::render('admin.jazz.create.pass', []);
}, Method::GET);

Route::serve('/createPass', function (array $props) {
    $jazzService = new JazzService();

    $startDate = $props['start_date'];
    $endDate = $props['end_date'];
    $price = $props['price'];
    $availableTickets = $props['available_tickets'];
    $totalTickets = $props['total_tickets'];
    $note = $props['note'];

    if (empty($startDate) || empty($endDate) || (! isset($price) && $price !== '0') || (! isset($availableTickets) && $availableTickets !== '0') || (! isset($totalTickets) && $totalTickets !== '0')) {
        $error = 'All fields marked with * are required.';
        echo "<div class='error bg-red-100 border-l-4 border-red-500 text-red-700 p-4 m-4' id='error' role='alert'>$error</div>";

        return;
    }

    if (! is_numeric($price) || $price < 0) {
        $error = 'Price must be a non-negative number.';
        echo "<div class='error bg-red-100 border-l-4 border-red-500 text-red-700 p-4 m-4' id='error' role='alert'>$error</div>";

        return;
    }

    if (! is_numeric($availableTickets) || ! is_numeric($totalTickets) || $availableTickets < 0 || $totalTickets < 0 || ! is_int((int) $availableTickets) || ! is_int((int) $totalTickets) || (int) $availableTickets > (int) $totalTickets) {
        $error = 'Available and total tickets must be valid non-negative integers, and available tickets cannot exceed total tickets.';
        echo "<div class='error bg-red-100 border-l-4 border-red-500 text-red-700 p-4 m-4' id='error' role='alert'>$error</div>";

        return;
    }

    if (strtotime($startDate) > strtotime($endDate)) {
        $error = 'Start date must be before end date.';
        echo "<div class='error bg-red-100 border-l-4 border-red-500 text-red-700 p-4 m-4' id='error' role='alert'>$error</div>";

        return;
    }

    $jazzService->createPass($price, $startDate, $endDate, $note, $availableTickets, $totalTickets);

    Route::redirect('/manageJazzPasses');
}, Method::POST);
