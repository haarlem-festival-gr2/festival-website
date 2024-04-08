<?php

use Core\Route\Route;

Route::serve('/historyTicket', function (array $props) {
    Route::render('history.historyTicket', []);
});
