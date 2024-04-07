<?php

use Core\Route\Method;
use Core\Route\Route;
use service\JazzService;
use Service\ValidateInputService;

require_once __DIR__.'/../../service/JazzService.php';
require_once __DIR__.'/../../service/ValidateInputService.php';

$jazzService = new JazzService();

Route::serve('/performances/createPerformance', function (array $props) use ($jazzService) {
    $artists = $jazzService->getAllArtists();
    $jazzDays = $jazzService->getAllJazzDays();

    Route::render('admin.jazz.create.performance', [
        'artists' => $artists,
        'jazzDays' => $jazzDays,
    ]);
}, Method::GET);

Route::serve('/performances/createPerformance', function (array $props) use ($jazzService) {
    $validateInputService = new ValidateInputService();

    $artistId = $props['artist'];
    $dayId = $props['day'];
    $startTime = $props['start_time'];
    $endTime = $props['end_time'];
    $price = $props['price'];
    $availableTickets = $props['available_tickets'];
    $totalTickets = $props['total_tickets'];
    $details = $props['details'];

    $validateInputService->checkRequiredFields([$artistId, $dayId, $startTime, $endTime]);
    $validateInputService->validateEmptyNumbers([$price, $availableTickets, $totalTickets]);
    $validateInputService->validatePrice($price);
    $validateInputService->validateTicketFields($availableTickets, $totalTickets);
    $validateInputService->validateTime($startTime, $endTime);

    $jazzService->createPerformance($artistId, $dayId, $price, $startTime, $endTime, $availableTickets, $totalTickets, $details);

    Route::redirect('/performances/managePerformances');
}, Method::POST);
