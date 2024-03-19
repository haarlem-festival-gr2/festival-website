<?php

use Core\Route\Method;
use Core\Route\Route;

Route::serve("/updateUserUnfo", function($props) {
    Route::render("login.update_form", []);
}, Method::GET);

Route::serve("/updateUserUnfo", function($props) {

    $email = $props['email'];
    $name = $props['name'];
    $username = $props['username'];


    if ($email !== '') {
        var_dump($props['email']);
    }

    if ($name !== '') {
        var_dump($props['name']);
    }

    if ($username !== '') {
        var_dump($props['username']);
    }

    echo "All modified values have been updated";

}, Method::POST);
