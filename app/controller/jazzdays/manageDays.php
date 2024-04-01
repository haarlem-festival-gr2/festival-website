<?php

use Core\Route\Method;
use Core\Route\Route;
use service\JazzService;

require_once __DIR__ . '/../../service/JazzService.php';

Route::serve('/jazzdays/manageDays', function (array $props) {
    $jazzService = new JazzService();

    $jazzDays = $jazzService->getAllJazzDays();
    Route::render('admin.jazz.manage.days', [
        'jazzDays' => $jazzDays,
    ]);
}, Method::GET);


Route::serve('/jazzdays/manageDays', function (array $props) {
    $jazzService = new JazzService();
    try {
        $jazzService->deleteJazzDay($props['id']);
    } catch (Exception $e) {
        echo "<script>alert('".addslashes($e->getMessage())."');</script>";
        return;
    }

    Route::redirect('/jazzdays/manageDays');
}, Method::POST);
