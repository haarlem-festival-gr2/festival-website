<?php

use Core\Route\Method;
use Core\Route\Route;

Route::serve('/agenda/purchase', function () {
    Route::render('agenda.purchase', []);
}, Method::GET);

Route::serve('/agenda/purchase', function ($props) {
    echo Route::render('agenda.event_horiz', ['img' => '/img/jazz/jazzDay1.png', 'title' => 'Day 1 EVENT', 'date' => 'NEVER']);
}, Method::POST);
