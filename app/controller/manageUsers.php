<?php

require_once __DIR__.'/../repository/UserRepository.php';
require_once __DIR__.'/../model/User.php';

use Core\Route\Route;
use Repository\UserRepository;

Route::serve('/manageUsers', function (array $props) {
    $userRepository = new UserRepository();
    $filter = $_GET['filter'] ?? null;
    $users = $userRepository->getAllUsers($filter);

    Route::render('manageUsers.manageUsers', ['users' => $users]);
});
