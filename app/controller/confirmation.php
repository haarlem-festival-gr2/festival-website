<?php

use Core\Route\Route;


Route::serve('/confirmation', function (array $props) {
    echo 'your tickets and invoice have been sent';

    //Route::render('confirmation', []);
});
