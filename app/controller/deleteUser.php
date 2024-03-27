<?php
// delete_user.php

require_once __DIR__ . '/../service/UserService.php';
use Service\UserService;

use Core\Route\Route;

Route::serve('/deleteUser', function (array $props) {
    if (!isset ($props['userId'])) {
        exit;
    }
    $userId = $props['userId'];

    $userService = new UserService();
    $userService->deleteUser($userId);

    Route::redirect("/manageUsers");
});