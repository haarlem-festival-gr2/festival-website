<?php

use Core\Route\Method;
use Core\Route\Route;

Route::serve('/index', function (array $props) {
    var_dump($props);
    $name = 'Senor Paparika';
    Route::render('hello', ['greet' => $name, 'pupils' => ['taco', 'quesadila', 'guac']]);
});

Route::serve('/index', function (array $props) {
    $name = 'postman';
    Route::json(['greet' => $name]);
}, Method::POST);
