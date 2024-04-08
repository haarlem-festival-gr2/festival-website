<?php

use Core\Route\Method;
use Core\Route\Route;

Route::serve('/login', function (array $props) {
    // require_once '/app/pages/login.html';
    $auth = Route::auth();
    if (Route::auth() != null) {
        Route::render('login.user', [
            'user' => $auth->Name,
            'isAdmin' => $auth->Role === 'admin',
            'isEmployee' => $auth->Role === 'admin' || $auth->Role === 'employee',
        ]);
    } else {
        Route::redirect('/login');
    }
});

Route::serve('/login', function (array $props) {
    if ($props['action'] == 'Log Out') {
        $_SESSION['auth'] = null;
        Route::redirect('/login');
    } elseif ($props['action'] == 'Change account info') {
        Route::redirect('/updateUserInfo');
    }
}, Method::POST);
