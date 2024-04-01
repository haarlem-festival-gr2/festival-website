<?php

use Core\Route\Method;
use Core\Route\Route;
use service\JazzService;
use Service\ValidateInputService;

require_once __DIR__ . '/../../service/ValidateInputService.php';
require_once __DIR__ . '/../../service/JazzService.php';

Route::serve('/venues/createVenue', function (array $props) {
    Route::render('admin.jazz.create.venue',
        []);
}, Method::GET);


Route::serve('/venues/createVenue', function (array $props) {
    $jazzService = new JazzService();
    $validateInputService = new ValidateInputService();

    $name = $props['name'];
    $address = $props['address'];
    $contactDetails = $props['contact_details'];

    $validateInputService->checkRequiredFields([$name, $address]);

    $jazzService->createVenue($name, $address, $contactDetails);

    Route::redirect('/venues/manageVenues');
}, Method::POST);
