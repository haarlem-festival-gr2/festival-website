<?php

require_once __DIR__.'/../repository/UserRepository.php';
require_once __DIR__.'/../service/UserService.php';

use Core\Route\Route;
use Service\UserService;

$userService = new UserService();

Route::serve('/createUser', function (array $props) {
    Route::render('manageUsers.createUser', []);
});

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Name = isset($_POST['firstName']) ? trim($_POST['firstName']) : '';
    $Username = isset($_POST['username']) ? trim($_POST['username']) : '';
    $Password = isset($_POST['password']) ? trim($_POST['password']) : '';
    $Role = isset($_POST['role']) ? trim($_POST['role']) : '';
    $Email = isset($_POST['email']) ? trim($_POST['email']) : '';

    if (empty($Name)) {
        exit('First name is required.');
    }

    if (empty($Username)) {
        exit('Username is required.');
    }

    if (empty($Password)) {
        exit('Password is required.');
    }

    if (empty($Role)) {
        exit('Role is required.');
    }

    if (empty($Email)) {
        exit('Email is required.');
    }

    $passwordHash = password_hash($Password, PASSWORD_DEFAULT);

    $result = $userService->registerNewUser($Email, $passwordHash, $Username, $Name);

    if ($result instanceof UserServiceError) {
        exit('Error creating user: '.$result->name);
    } elseif ($result) {
        // if registration is successful and a user object is returned then redirect to the manage users page
        header('Location: /manageUsers');
        exit;
    } else {
        // log unexpected result for debugging
        error_log('Unexpected result from registerNewUser: '.print_r($result, true));
        exit('Unexpected error occurred.');
    }
} else {
    header('Location: /addUser');
    exit;
}
