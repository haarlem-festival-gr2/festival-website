<?php

require_once __DIR__.'/../service/UserService.php';
require_once __DIR__.'/../service/ResetTokenService.php';

use Core\Route\Method;
use Core\Route\Route;
use Service\ResetTokenService;

Route::serve('/reset', function (array $props) {
    if (! isset($props['token'])) {
        Route::render('login.reset', []);
    } else {
        $token = $props['token'];
        Route::render('login.reset_form', ['token' => $token]);
    }
});

Route::serve('/reset', function (array $props) {
    $service = new ResetTokenService();
    $password = $props['password'];
    $passwordConfirm = $props['password_c'];
    $token = $props['token'];

    if ($password != $passwordConfirm) {
        echo 'Passwords dont match';
        exit;
    }

    $service->setNewPassword($token, $password);
}, Method::POST);
