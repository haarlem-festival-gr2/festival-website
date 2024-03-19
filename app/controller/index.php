<?php

use Core\Route\Route;

require_once __DIR__.'/../repository/BaseRepository.php';
require_once __DIR__.'/../repository/UserRepository.php';

Route::serve('/index', function (array $props) {
    echo "<h1>This is a WIP</h1>";
    echo '<a href="/login">login</a>';
});
