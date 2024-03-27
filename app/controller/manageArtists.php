<?php

use Core\Route\Method;
use Core\Route\Route;
use service\JazzService;

require_once __DIR__.'/../service/JazzService.php';

Route::serve('/manageArtists', function (array $props) {
    $jazzService = new JazzService();
    $artists = $jazzService->getAllArtists();

    Route::render('admin.jazz.manage.artists', [
        'artists' => $artists,
    ]);
});

Route::serve('/manageArtists', function (array $props) {
    $jazzService = new JazzService();

    try {
        $jazzService->deleteArtist($props['id']);
    } catch (Exception $e) {
        echo "<script>alert('".addslashes($e->getMessage())."');</script>";

        return;
    }

    Route::redirect('/manageArtists');
}, Method::POST);
