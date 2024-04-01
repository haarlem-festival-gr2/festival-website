<?php

use Core\Route\Route;
use model\Order;
use Service\PaymentService;

Route::serve('/cancelPayment', function (array $props) {
    if (isset($_GET['session_id']))
    {
        $paymentService = new PaymentService();

        $sessionID = $_GET['session_id'];

        $order = $paymentService->getOrderBySessionID($sessionID);
        if(!$order) {
            Route::redirect('/agenda');
        }
        $paymentService->updateOrderStatus($sessionID, Order::ORDER_STATUS_CANCELLED);
    }
    Route::redirect('/agenda');
});