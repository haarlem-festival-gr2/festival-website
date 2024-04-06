<?php

use Core\Route\ErrorCode;
use Core\Route\Method;
use Core\Route\Route;
use Service\SoldTicketService;

// maybe eventually /admin/*
Route::serve('finance', function ($props) {
    $service = new SoldTicketService();
    $role = @Route::auth()->Role;
    if ($role !== 'admin' && $role !== 'employee') {
        Route::error(ErrorCode::NOT_FOUND);
        exit;
    }

    $info = $service->getFiscalInfo();
    $total = 0;

    foreach ($info as &$row) {
        $total += $row['Cost'];
    }

    Route::render('admin.finance', ['monthlyRevenue' => $total, 'totalSales' => count($info)]);
});

Route::serve('finance', function ($props) {
    $role = @Route::auth()->Role;
    if ($role !== 'admin' && $role !== 'employee') {
        Route::error(ErrorCode::NOT_FOUND);
        exit;
    }

    $service = new SoldTicketService();

    header('Content-Type: text/csv');
    echo "TicketUUID,CustomerID,OrderItemID,EventName,Cost\n";
    $info = $service->getFiscalInfo();

    foreach ($info as &$row) {
        echo $row['TicketUUID'] . ','
            . $row['CustomerID'] . ','
            . $row['OrderItemID'] . ','
            . $row['EventName'] . ','
            . $row['Cost'] . "\n";
    }

    echo ",,,Total,=SUM(E2:E9)\n";
}, Method::POST);
