<?php

use Core\Route\Method;
use Core\Route\Route;
use service\JazzService;

require_once __DIR__.'/../service/JazzService.php';

Route::serve('/createVenue', function (array $props) {

    $jazzService = new JazzService();

    Route::render('admin.jazz.create.venue', [

    ]);
}, Method::GET);