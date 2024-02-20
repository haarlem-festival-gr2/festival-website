<?php

use Core\Route\Method;
use Core\Route\Route;
use Repository\UserRepository;

require_once __DIR__.'/../repository/BaseRepository.php';
require_once __DIR__.'/../repository/UserRepository.php';

Route::serve('/index', function (array $props) {
    var_dump($props);
    $name = 'Senor Paparika';
    Route::render('hello', ['greet' => $name, 'pupils' => ['taco', 'quesadila', 'guac']]);

    $repo = new UserRepository();
    var_dump($repo->get_all());
});

Route::serve('/index', function (array $props) {
    $name = 'postman';
    Route::json(['greet' => $name]);
}, Method::POST);
