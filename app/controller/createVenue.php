<?php

use Core\Route\Method;
use Core\Route\Route;
use service\JazzService;

require_once __DIR__.'/../service/JazzService.php';

Route::serve('/createVenue', function (array $props) {
    Route::render('admin.jazz.create.venue', []);
}, Method::GET);

Route::serve('/createVenue', function (array $props) {
    $jazzService = new JazzService();

    $name = $props['name'];
    $address = $props['address'];
    $contactDetails = $props['contact_details'];

    if ( empty($name) || empty($address)){
        $error = 'All fields marked with * are required.';
        echo "<div class='error bg-red-100 border-l-4 border-red-500 text-red-700 p-4 m-4' id='error' role='alert'>$error</div>";
        return;
    }

    $jazzService->createVenue($name, $address, $contactDetails);

    Route::redirect('/manageVenues');
}, Method::POST);