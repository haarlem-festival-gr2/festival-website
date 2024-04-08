<?php

use Core\Route\Method;
use Core\Route\Route;
use Model\User;
use Service\UserService;

Route::serve('/updateUser', function (array $props) {
    header('Location: /manageUsers');
    exit;
});

Route::serve('/updateUser', function (array $props) {
    // Route::render('manageUsers.updateUser', []);

    $service = new UserService();

    $userId = $props['userId'];
    $firstName = $props['firstName'];
    $username = $props['username'];
    $email = $props['email'];
    $role = $props['role'];

    $user = new User();

    $user->UserID = $userId;
    $user->Name = $firstName;
    $user->Username = $username;
    $user->Email = $email;
    $user->Role = $role;

    $service->updateUser($user);

    header('Location: /manageUsers');
}, Method::POST);
