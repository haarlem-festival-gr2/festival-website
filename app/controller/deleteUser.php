<?php

// delete_user.php

require_once __DIR__.'/../service/UserService.php';
use Core\Route\Route;
use Service\UserService;

Route::serve('/deleteUser', function (array $props) {
    if (! isset($props['userId'])) {
        exit;
    }
    $userId = $props['userId'];

    $userService = new UserService();
    $userService->deleteUser($userId);

    Route::redirect('/manageUsers');
});
