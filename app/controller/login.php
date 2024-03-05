<?php

require_once __DIR__.'/../service/UserService.php';

use Core\Route\Method;
use Core\Route\Route;
use Service\UserService;

Route::serve('/login', function (array $props) {
    require_once '/app/pages/login.html';
    // Route::render('login', []);
});

Route::serve('/login', function (array $props) {
    $service = new UserService();

    $email = $props['email'];
    $password = $props['password'];

    if ($props['action'] == 'Login') {
        $check = $service->verifyUserCredentials($email, $password);
        if ($check) {
            Route::redirect("/");
        } else {
            echo 'Invalid username/password provided';
        }
    } else {
        echo "Registrations are on pause for now";
    }
}, Method::POST);
