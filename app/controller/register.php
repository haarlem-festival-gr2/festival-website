<?php

require_once __DIR__.'/../service/UserService.php';

use Core\Route\Route;
use Service\UserService;

Route::serve('/login', function (array $props) {
    // require_once '/app/pages/login.html';
    $auth = Route::auth();
    if (Route::auth() != null) {
        Route::render('login.user', ['user' => $auth->Name]);
    } else {
        Route::render('login.register', []);
    }
});
