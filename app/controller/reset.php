<?php

require_once __DIR__.'/../service/UserService.php';

use Core\Route\Method;
use Core\Route\Route;
use Service\UserService;

Route::serve('/reset', function (array $props) {
    Route::render('login.reset', []);
});

Route::serve('/reset', function (array $props) {
    $service = new UserService();
    $email = $props['email'];

    if ($service->resetPassword($email)) {
        // the redirect will happen, but to
        // a different form
        header('Hx-Redirect: /login');
    } else {
        echo 'Please provide a valid email';
    }

}, Method::POST);
