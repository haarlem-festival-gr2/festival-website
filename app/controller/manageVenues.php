<?php

use Core\Route\Method;
use Core\Route\Route;
use service\JazzService;

require_once __DIR__.'/../service/JazzService.php';

Route::serve('/manageVenues', function (array $props) {
    $jazzService = new JazzService();

    $venues = $jazzService->getAllVenues();
    $jazzDays = $jazzService->getAllJazzDays();
    Route::render('admin.jazz.manageVenues', [
        'venues' => $venues,
        'jazzDays' => $jazzDays,
    ]);
}, Method::GET);


Route::serve('/manageVenues', function (array $props) {
    $jazzService = new JazzService();

    $uri = $_SERVER['REQUEST_URI'];
    if ($uri == "/manageVenues/edit"){
        $venueId = $props['venue_id'];
        $name = $props['name'];
        $address = $props['address'];
        $contactDetails = $props['contact_details'];
        $jazzService->updateVenue($venueId, $name, $address, $contactDetails);
    }
    else if(($uri == "/manageVenues/create")){
        $jazzService->createVenue($props['name'], $props['address'], $props['contact_details']);
    }
    else if(($uri == "/manageVenues/delete")){
        $jazzService->deleteVenue($props['venue_id']);
    }

    Route::redirect('/manageVenues');
}, Method::POST);

/*Route::serve('/manageVenues', function (array $props) {
    $jazzService = new JazzService();
    if (isset($props['action'])) {
        switch ($props['action']) {
            case 'edit':
                if (isset($props['venue_id'])) {
                    // Perform the update
                    $venueId = $props['venue_id'];
                    $name = $props['name'];
                    $address = $props['address'];
                    $contactDetails = $props['contact_details'];
                    $jazzService->updateVenue($venueId, $name, $address, $contactDetails);
                }
                break;
            case 'create':
                // Perform the creation
                $jazzService->createVenue($props['name'], $props['address'], $props['contact_details']);
                break;
            case 'delete':
                $jazzService->deleteVenue($props['venue_id']);
        }
    }
    Route::redirect('/manageVenues');
}, Method::POST);*/


/*Route::serve('/manageVenues', function (array $props) {
    $jazzService = new JazzService();

    $venueId = $props['venue_id'];
    $jazzService->deleteVenue($venueId);
        Route::redirect('/manageVenues');
}, Method::DELETE);*/


/*Route::serve('/manageVenue', function (array $props) {
    $jazzService = new JazzService();
    if (isset($props['venue_id'])) {
        $venueId = $props['venue_id'];
        $name = $props['name'];
        $address = $props['address'];
        $contactDetails = $props['contact_details'];

        $jazzService->updateVenue($venueId, $name, $address, $contactDetails);

        Route::redirect('/manageVenues');
    }
}, Method::POST);*/