<?php

use Core\Route\Method;
use Core\Route\Route;

Route::serve("/agenda/purchase", function() {
    Route::render("agenda.purchase", []);
}, Method::GET);

Route::serve("/agenda/purchase", function($props) {
    var_dump($_POST);
}, Method::POST);

