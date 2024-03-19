<?php

use Core\Route\Route;
use Service\UserService;

Route::serve('/addUser', function (array $props) {
    Route::render('addUser', []);
});

Route::serve('/createUser', function (array $props) {
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $firstName = trim($_POST["firstName"]);
        $lastName = trim($_POST["lastName"]);
        $username = trim($_POST["username"]);
        $email = trim($_POST["email"]);
        $password = trim($_POST["password"]);
        $role = trim($_POST["role"]);

        $userService = new UserService();
        $result = $userService->registerNewUser($email, $password, $username, $firstName . ' ' . $lastName);

        if ($result instanceof UserServiceError) {
            exit ('Error creating user: ' . $result->name);
        }

        header('Location: /manageUsers');
        exit;
    } else {
        exit ('Invalid request method');
    }
});
?>