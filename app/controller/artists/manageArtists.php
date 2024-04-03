<?php

use Core\Route\Method;
use Core\Route\Route;
use service\JazzService;

require_once __DIR__ . '/../../service/JazzService.php';

$jazzService = new JazzService();

Route::serve('/artists/manageArtists', function (array $props) use($jazzService) {
    $artists = $jazzService->getAllArtists();

    Route::render('admin.jazz.manage.artists', [
        'artists' => $artists,
    ]);
}, Method::GET);


Route::serve('/artists/manageArtists', function (array $props)  use ($jazzService)  {
    if(isset($props['id'])){
        try {
            $jazzService->deleteArtist($props['id']);
        } catch (Exception $e) {
            echo "<script>alert('".addslashes($e->getMessage())."');</script>";
            return;
        }
    }

    Route::redirect('/artists/manageArtists');
}, Method::POST);

