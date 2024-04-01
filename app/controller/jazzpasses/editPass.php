<?php

use Core\Route\Method;
use Core\Route\Route;
use service\JazzService;
use Service\ValidateInputService;

require_once __DIR__ . '/../../service/JazzService.php';
require_once __DIR__ . '/../../service/ValidateInputService.php';

$jazzService = new JazzService();

Route::serve('/jazzpasses/editPass', function (array $props) use ($jazzService){
    if(!isset($props['id'])) {
        Route::redirect('/jazzpasses/managePasses');
    }

    $passId = $props['id'];
    $pass = $jazzService->getJazzPassById($passId);

    Route::render('admin.jazz.edit.pass',
        ['pass' => $pass]
    );
}, Method::GET);


Route::serve('/jazzpasses/editPass', function (array $props) use ($jazzService){

    $validateInputService = new ValidateInputService();

    $id = $props['id'];
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

    $jazzService->updatePass($id, $price, $startDate, $endDate, $note, $availableTickets, $totalTickets);

    Route::redirect('/jazzpasses/managePasses');
}, Method::POST);
