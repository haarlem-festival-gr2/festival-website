<?php

use Core\Route\Method;
use Core\Route\Route;
use service\JazzService;
use Service\ValidateInputService;

require_once __DIR__.'/../../service/JazzService.php';
require_once __DIR__.'/../../service/ValidateInputService.php';

$jazzService = new JazzService();

Route::serve('/venues/editVenue', function (array $props) use ($jazzService) {
    if (! isset($props['id'])) {
        Route::redirect('/venues/manageVenues');
    }

    $venueId = $props['id'];
    $venue = $jazzService->getVenueById($venueId);

    Route::render('admin.jazz.edit.venue', [
        'venue' => $venue,
    ]);
}, Method::GET);

Route::serve('/venues/editVenue', function (array $props) use ($jazzService) {
    $validateInputService = new ValidateInputService();

    $venueId = $props['id'];
    $name = $props['name'];
    $address = $props['address'];
    $contactDetails = $props['contact_details'];

    $validateInputService->checkRequiredFields([$name, $address]);

    $jazzService->updateVenue($venueId, $name, $address, $contactDetails);

    Route::redirect('/venues/manageVenues');
}, Method::POST);
