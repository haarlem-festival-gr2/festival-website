<?php

require_once __DIR__.'/../service/UserService.php';

use Core\Route\Method;
use Core\Route\Route;
use Service\UserService;

Route::serve('/login', function (array $props) {
    // require_once '/app/pages/login.html';
    $auth = Route::auth();
    if (Route::auth() != null) {
        Route::redirect("/user");
    } else {
        Route::render('login.login', []);
    }
});

Route::serve('/login', function (array $props) {
    $service = new UserService();

    $email = $props['email'];
    $password = $props['password'];

    if ($props['action'] == 'Login') {
        $check = $service->verifyUserCredentials($email, $password);
        if ($check) {
            $_SESSION['auth'] = $check;
            Route::redirect('/login'); // Header is Hx-Redirect instead of Location
        } else {
            echo 'Invalid username/password provided';
        }
    }
}, Method::POST);
