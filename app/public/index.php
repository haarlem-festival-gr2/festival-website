<?php

declare(strict_types=1);

namespace App;

use PDO;

require_once __DIR__.'/../vendor/autoload.php';

require __DIR__.'/../db_config.php';

echo $db_conn;

$connection = new PDO($db_conn, $db_user, $db_pass);

$staged = $connection->prepare('SELECT 1 + 1');
$staged->execute();

var_dump($staged->fetch());
