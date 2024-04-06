<?php

use Core\Route\Method;
use Core\Route\Route;
use model\Order;
use Service\PaymentService;
use Stripe\Checkout\Session;
use Stripe\PaymentIntent;
use Stripe\PaymentMethod;
use Stripe\Stripe;

require_once __DIR__ . '/../service/PaymentService.php';

Route::serve('/success', function () {

    if (isset($_GET['session_id']))
    {
        $paymentService = new PaymentService();
        Stripe::setApiKey(getenv("STRIPE_KEY"));
        $sessionID = $_GET['session_id'];

        $session = Session::retrieve($sessionID);
        $paymentIntent = PaymentIntent::retrieve($session->payment_intent);
        $paymentMethod = PaymentMethod::retrieve($paymentIntent->payment_method);

        $order = $paymentService->getOrderBySessionID($sessionID);
        if(!$order) {
            echo("Order is not found");
        }

        if( $session->payment_status == 'paid'){
            if($order->getStatus() == Order::ORDER_STATUS_UNPAID){
                $paymentService->updateOrderStatus($sessionID, Order::ORDER_STATUS_PAID);
                $paymentService->updateTicketsAvailability($order->getOrderUUID());

                $paymentDateTime = date('Y-m-d H:i:s', $paymentIntent->created + 7200);
                $customerName = $session->customer_details['name'];
                $email = $paymentIntent->receipt_email;
                $phoneNumber = $session->customer_details['phone'];
                $method = $paymentMethod->type;
                $city = $paymentMethod->billing_details['address']['city'];
                $country = $paymentMethod->billing_details['address']['country'];
                $line1 = $paymentMethod->billing_details['address']['line1'];
                $line2 = $paymentMethod->billing_details['address']['line2'] ?? '';
                $postalCode = $paymentMethod->billing_details['address']['postal_code'];
                $billingAddress = $line1 . $line2 . ', ' . $city . ', ' . $country . ', ' . $postalCode;
                $totalAmount = (float)($session->amount_total / 100);
                $tax = (float)($session->total_details['amount_tax'] / 100);
                $currency = $session->currency;

                $id = $paymentService->registerPayment($paymentDateTime, $customerName, $email, $phoneNumber, $method, $billingAddress, $totalAmount, $tax, $currency, $order->getOrderUUID());
                $paymentService->sendInvoice($id);

                $paymentService->sendTickets($order->getOrderUUID(), $email, $customerName);

                $_SESSION['cart'] = [];
            }
            Route::redirect('/confirm');
        } else {
            echo "Payment failed.";
        }
    } else {
        Route::redirect('/agenda/overview');
    }
}, Method::GET);
