<?php

declare(strict_types=1);

namespace App;

require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/../core/Route.php';

use Core\Route\ErrorCode;
use Core\Route\Route;

// require_once __DIR__.'/../db_config.php';
// use PDO;
//
// $connection = new PDO($db_conn, $db_user, $db_pass);
//
// $staged = $connection->prepare('SELECT 1 + 1');
// $staged->execute();

echo \hello_world("HIM");

Route::start_router(function (array $routes) {
    $first_path = $routes[0];
    $controller_file = __DIR__.'/../controller/'.$first_path.'.php';

    if (file_exists($controller_file)) {
        require_once $controller_file;
    } else {
        Route::error(ErrorCode::NOT_FOUND);
    }
});
