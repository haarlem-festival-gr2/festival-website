<?php

use Core\Route\Method;
use Core\Route\Route;
use service\JazzService;
use Service\ValidateInputService;

require_once __DIR__.'/../../service/JazzService.php';
require_once __DIR__.'/../../service/ValidateInputService.php';

Route::serve('/jazzpasses/createPass', function (array $props) {
    Route::render('admin.jazz.create.pass', []);
}, Method::GET);

Route::serve('/jazzpasses/createPass', function (array $props) {
    $jazzService = new JazzService();

    $validateInputService = new ValidateInputService();

    $startDate = $props['start_date'];
    $endDate = $props['end_date'];
    $price = $props['price'];
    $availableTickets = $props['available_tickets'];
    $totalTickets = $props['total_tickets'];
    $note = $props['note'];

    $validateInputService->checkRequiredFields([$startDate, $endDate]);
    $validateInputService->validateEmptyNumbers([$price, $availableTickets, $totalTickets]);
    $validateInputService->validatePrice($price);
    $validateInputService->validateDate($startDate, $endDate);
    $validateInputService->validateTicketFields($availableTickets, $totalTickets);

    $jazzService->createPass($price, $startDate, $endDate, $note, $availableTickets, $totalTickets);

    Route::redirect('/jazzpasses/managePasses');
}, Method::POST);
