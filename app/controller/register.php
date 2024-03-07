<?php

require_once __DIR__.'/../service/UserService.php';

use Core\Route\Method;
use Core\Route\Route;
use Service\UserService;
use Service\UserServiceError;

Route::serve('/login', function (array $props) {
    // require_once '/app/pages/login.html';
    $auth = Route::auth();
    if (Route::auth() != null) {
        Route::render('login.user', ['user' => $auth->Name]);
    } else {
        Route::render('login.register', []);
    }
});

Route::serve('/login', function (array $props) {
    $service = new UserService();

    $email = $props['email'];
    $username = $props['username'];
    $name = $props['name'];
    $password = password_hash($props['password'], PASSWORD_BCRYPT);

    // "Mom can we have Option<T>"; "We have Option<T> at home"
    $option = $service->registerNewUser($email, $password, $username, $name);
    if ($option == UserServiceError::ERR_USER_EXISTS) {
        echo 'This user already exists';
    } elseif ($option == UserServiceError::INVALID_EMAIL) {
        echo 'The email name seems to be invalid';
    } elseif ($option == UserServiceError::ERR_USER_IS_A_TEAPOT) {
        echo 'WABA LABA DUB DUB';
    } else {
        $_SESSION['auth'] = $option; // now confirmed to be User
        Route::redirect('/user');
    }
}, Method::POST);
