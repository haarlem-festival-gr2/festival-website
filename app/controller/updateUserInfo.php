<?php

require_once __DIR__.'/../service/UserService.php';

use Core\Route\Method;
use Core\Route\Route;
use Service\UserService;

Route::serve('/updateUserUnfo', function ($props) {
    Route::render('login.update_form', []);
}, Method::GET);

Route::serve('/updateUserUnfo', function ($props) {

    $email = $props['email'];
    $name = $props['name'];
    $username = $props['username'];

    $user = Route::auth();

    if (! $user) {
        return;
    }

    $service = new UserService();

    if ($email !== '') {
        $user->Email = $email;
        $service->updateUser($user);
    }

    if ($name !== '') {
        $user->Name = $name;
        $service->updateUser($user);
    }

    if ($username !== '') {
        $user->Username = $username;
        $service->updateUser($user);
    }

    echo 'All modified values have been updated';

}, Method::POST);
