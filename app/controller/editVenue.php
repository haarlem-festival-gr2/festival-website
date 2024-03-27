<?php

use Core\Route\Method;
use Core\Route\Route;
use service\JazzService;

require_once __DIR__.'/../service/JazzService.php';

Route::serve('/editVenue', function (array $props) {

    /*$user = Route::auth();
    if (!$user) {
        Route::error(ErrorCode::UNAUTHORIZED);
        return;
    }*/

    $jazzService = new JazzService();
    $venueId = $props['id'];
    $venue = $jazzService->getVenueById($venueId);

    Route::render('admin.jazz.edit.venue', [
        'venue' => $venue,
    ]);
}, Method::GET);

Route::serve('/editVenue', function (array $props) {
    $jazzService = new JazzService();

    $venueId = $props['id'];
    $name = $props['name'];
    $address = $props['address'];
    $contactDetails = $props['contact_details'];

    if ( empty($name) || empty($address)){
        $error = 'All fields marked with * are required.';
        echo "<div class='error bg-red-100 border-l-4 border-red-500 text-red-700 p-4 m-4' id='error' role='alert'>$error</div>";
        return;
    }

    $jazzService->updateVenue($venueId, $name, $address, $contactDetails);

    Route::redirect('/manageVenues');
}, Method::POST);