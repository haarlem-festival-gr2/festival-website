<?php

use Core\Route\Method;
use Core\Route\Route;

require_once __DIR__.'/../service/JazzService.php';

Route::serve('/payment', function (array $props) {

    Route::render('payment.payment', []);
}, Method::GET);
