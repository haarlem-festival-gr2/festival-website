<?php

use Core\Route\Method;
use Core\Route\Route;
use service\JazzService;

require_once __DIR__ . '/../../service/JazzService.php';

Route::serve('/performances/createPerformance', function (array $props) {
    $jazzService = new JazzService();
    $artists = $jazzService->getAllArtists();
    $jazzDays = $jazzService->getAllJazzDays();

    Route::render('admin.jazz.create.performance', [
        'artists' => $artists,
        'jazzDays' => $jazzDays,
    ]);
}, Method::GET);


Route::serve('/performances/createPerformance', function (array $props) {
    $jazzService = new JazzService();

    $artistId = $props['artist'];
    $dayId = $props['day'];
    $startTime = $props['start_time'];
    $endTime = $props['end_time'];
    $price = $props['price'];
    $availableTickets = $props['available_tickets'];
    $totalTickets = $props['total_tickets'];
    $details = $props['details'];

    if (empty($artistId) || empty($dayId) || empty($startTime) || empty($endTime) || (! isset($price) && $price !== '0') || (! isset($availableTickets) && $availableTickets !== '0') || (! isset($totalTickets) && $totalTickets !== '0')) {
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

    if (strtotime($startTime) > strtotime($endTime)) {
        $error = 'Start time must be before end time.';
        echo "<div class='error bg-red-100 border-l-4 border-red-500 text-red-700 p-4 m-4' id='error' role='alert'>$error</div>";

        return;
    }

    $jazzService->createPerformance($artistId, $dayId, $price, $startTime, $endTime, $availableTickets, $totalTickets, $details);

    Route::redirect('/performances/managePerformances');
}, Method::POST);
