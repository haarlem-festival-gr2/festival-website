<?php

use Core\Route\Route;

Route::serve('/updateUser', function (array $props) {
    Route::render('updateUser', []);
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $userId = $_POST['userId'];

        header("Location: /editUser?userId=$userId");
        exit;
    } else {
        header("Location: /manageUsers");
        exit;
    }
});
