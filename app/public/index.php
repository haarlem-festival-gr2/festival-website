<?php

declare(strict_types=1);

namespace App;

require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/../core/Route.php';

use Core\Route\Route;

// require_once __DIR__.'/../db_config.php';
// use PDO;
//
// $connection = new PDO($db_conn, $db_user, $db_pass);
//
// $staged = $connection->prepare('SELECT 1 + 1');
// $staged->execute();

Route::start_router();

Route::serve('/hello', function (array $props) {
    $name = 'Senor Paparika';
    Route::render('hello', ['greet' => $name]);
});

// The Fallback Transaction Ender󰩸 (FTE)
// (patent pending)
Route::end_buffer();
