<?php

declare(strict_types=1);

namespace App;

require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/../core/Route.php';

use Core\Route\ErrorCode;
use Core\Route\Route;

use PDO;

$dsn = "mysql:host={$_ENV["PS_DB_HOST"]};dbname={$_ENV["PS_DB_NAME"]}";
$options = array(
  PDO::MYSQL_ATTR_SSL_CA => "/etc/ssl/certs/ca-certificates.crt",
);
$pdo = new PDO($dsn, $_ENV["PS_DB_USERNAME"], $_ENV["PS_DB_PASSWORD"], $options);

$query = $pdo->prepare('SELECT * FROM User;');
$query->execute();

//var_dump($query->fetchAll());

//echo \hello_world("HIM");

Route::start_router(function (array $routes) {
    $first_path = $routes[0];
    $controller_file = __DIR__.'/../controller/'.$first_path.'.php';

    if (file_exists($controller_file)) {
        require_once $controller_file;
    } else {
        Route::error(ErrorCode::NOT_FOUND);
    }
});
