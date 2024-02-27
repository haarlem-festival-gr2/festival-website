<?php

use Core\Route\Method;
use Core\Route\Route;
use Repository\UserRepository;

require_once __DIR__.'/../repository/BaseRepository.php';
require_once __DIR__.'/../repository/UserRepository.php';

Route::serve('/index', function (array $props) {
    var_dump($props);
    $name = 'Welcome to our festival website!';
    Route::render('hello', ['greet' => $name, 'pupils' => ['Ollibolen', 'Poferages', 'I am so sorry for the spellings']]);
    $repo = new UserRepository();
    var_dump($repo->get_all());
});

Route::serve('/index', function (array $props) {
    $name = 'postman';
    Route::json(['greet' => $name]);
}, Method::POST);
