<?php

declare(strict_types=1);

namespace App;

require_once __DIR__.'/../core/Util.php';

require_once __DIR__.'/../vendor/autoload.php';

use Core\Route\ErrorCode;
use Core\Route\Route;
use Service\DynPageService;

Route::start_router(function (array $routes) {
    $service = new DynPageService();

    $first_path = $routes[0];

    $controller_file = __DIR__.'/../controller/'.$first_path.'.php';

    if (file_exists($controller_file)) {
        require_once $controller_file;
    } else {
        $ret = $service->getPage($first_path);

        if ($ret === false) {
            Route::error(ErrorCode::NOT_FOUND);
        } else {
            Route::render('main.mainpage_head', ['content' => function() use ($ret) {
                echo $ret;
            }]);
        }

    }
});
