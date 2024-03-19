<?php

require_once __DIR__ . '/../repository/UserRepository.php';

use Service\UserService;
use Core\Route\Route;

require_once __DIR__ . '/../service/UserService.php';

$userService = new UserService();

Route::serve('/createUser', function (array $props) {
    Route::render('manageUsers.createUser', []);
});

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);
    $role = trim($_POST["role"]);
    $email = trim($_POST["email"]);

    if (empty($Name) || empty($Username) || empty($Password) || empty($Role) || empty($Email)) {
        exit('Please complete all required fields.');
    }
    ;

    $PasswordHash = password_hash($password, PASSWORD_DEFAULT);

    $result = $userService->registerNewUser($email, $passwordHash, $username, $name);

    if ($result instanceof UserServiceError) {
        exit('Error creating user: ' . $result->name);
    } elseif ($result) {
        // if registration is successful and a user object is returned
        // Redirect to the manage users page
        header('Location: /manageUsers');
        exit;
    } else {
        // log unexpected result for debugging
        error_log('Unexpected result from registerNewUser: ' . print_r($result, true));
        exit('Unexpected error occurred.');
    }
} else {
    // redirect to the user form if the script is accessed without posting form data
    header('Location: /addUser');
    exit;
}

