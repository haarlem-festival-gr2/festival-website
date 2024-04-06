<?php

declare(strict_types=1);

namespace App;

require_once __DIR__.'/../core/Util.php';

require_once __DIR__.'/../vendor/autoload.php';

use Core\Route\ErrorCode;
use Core\Route\Route;

Route::start_router(function (array $routes) {
    $first_path = $routes[0];

    $controller_file = __DIR__.'/../controller/'.$first_path.'.php';

    if (file_exists($controller_file)) {
        require_once $controller_file;
    } else if (file_exists("/dynpages/$first_path")) {
        require_once "/dynpages/$first_path.html";
    }
    else {
        Route::error(ErrorCode::NOT_FOUND);
    }
});
