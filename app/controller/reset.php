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
    if ($props['action'] === 'Send recovery email') {
        $service = new ResetTokenService();
        $email = $props['email'];
        $service->sendRecoveryEmail($email);
        echo 'If we find your email in our database, we will send you an email';
    } else {
        $service = new ResetTokenService();
        $password = $props['password'];
        $passwordConfirm = $props['password_c'];
        $token = $props['token'];

        if ($password != $passwordConfirm) {
            echo 'Passwords dont match';
            exit;
        }

        $passwordHash = password_hash($password, PASSWORD_BCRYPT);

        $res = $service->setNewPassword($token, $passwordHash);

        if (! $res) {
            echo 'Something went wrong';
        } else {
            Route::redirect('/login');
        }
    }
}, Method::POST);
