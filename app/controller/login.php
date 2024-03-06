<?php

require_once __DIR__.'/../service/UserService.php';

use Core\Route\Method;
use Core\Route\Route;
use Service\UserService;

Route::serve('/login', function (array $props) {
    // require_once '/app/pages/login.html';
    if (! Route::auth()) {
        Route::render('login.login', []);
    } else {
        echo 'You are already logged in lmao';
        $_SESSION['auth'] = null;
    }
});

Route::serve('/login', function (array $props) {
    $service = new UserService();

    $email = $props['email'];
    $password = $props['password'];

    if ($props['action'] == 'Login') {
        $check = $service->verifyUserCredentials($email, $password);
        if ($check) {
            $_SESSION['auth'] = true;
            Route::redirect('/');
        } else {
            echo 'Invalid username/password provided';
        }
    } else {
        if (verifyEmail($email)) {
            echo 'Registrations are on pause for now';
        } else {
            echo 'Please enter a valid email';
        }
    }
}, Method::POST);
