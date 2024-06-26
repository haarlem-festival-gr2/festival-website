<?php

use Core\Route\Route;
use Repository\UserRepository;

require_once __DIR__.'/../repository/UserRepository.php';
require_once __DIR__.'/../model/User.php';

Route::serve('/editUser', function (array $props) {
    // retrieve user ID from query parameters
    $userId = $_GET['userId'];

    // fetch user details by ID
    $userRepository = new UserRepository();
    $userDetails = $userRepository->getUserById($userId);

    Route::render('manageUsers.editUser', ['userId' => $userId, 'userDetails' => $userDetails]);
});
