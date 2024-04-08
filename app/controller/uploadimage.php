<?php

use Core\Route\Method;
use Core\Route\Route;
use Service\ImageService;

Route::serve('/uploadimage', function ($props) {
    if ($_FILES['file']['error'] != 0) {
        // this is the only error the user needs to know
        // if something else is the error, it is better
        // that the user does not have that info, could
        // be that they uploaded something malacious, and
        // we will not respond to such things
        http_response_code(413);
        echo '413 Request Entity Too Large';
    } else {
        $service = new ImageService();

        $loc = $service->uploadImage($_FILES['file'], 'editor');

        header('Content-Type: application/json');
        echo json_encode(['location' => $loc]);
    }
}, Method::POST);
