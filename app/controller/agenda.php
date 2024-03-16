<?php

require_once __DIR__.'/../service/AgendaService.php';

use Core\Route\Route;
use Service\AgendaService;

Route::serve('/agenda', function () {
    $service = new AgendaService();
    echo 'You are a bitch';
});
