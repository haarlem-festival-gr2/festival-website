<?php

use Core\Route\Method;
use Core\Route\Route;
use service\JazzService;

require_once __DIR__.'/../../service/JazzService.php';
$jazzService = new JazzService();

Route::serve('/jazzdays/manageDays', function (array $props) use ($jazzService) {
    $jazzDays = $jazzService->getAllJazzDays();

    Route::render('admin.jazz.manage.days', [
        'jazzDays' => $jazzDays,
    ]);
}, Method::GET);

Route::serve('/jazzdays/manageDays', function (array $props) use ($jazzService) {
    if (isset($props['id'])) {
        try {
            $jazzService->deleteJazzDay($props['id']);
        } catch (Exception $e) {
            echo "<script>alert('".addslashes($e->getMessage())."');</script>";

            return;
        }
    }

    Route::redirect('/jazzdays/manageDays');
}, Method::POST);
