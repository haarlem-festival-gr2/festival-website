<?php

use Core\Route\Method;
use Core\Route\Route;
use Model\Invoice;
use model\Order;
use Service\PaymentService;
use Service\QRCodeService;
use Stripe\Charge;
use Stripe\Checkout\Session;
use Stripe\PaymentIntent;
use Stripe\PaymentMethod;
use Stripe\Stripe;

require_once __DIR__.'/../service/PaymentService.php';
require_once __DIR__.'/../service/QRCodeService.php';

//echo "SUCCESS!!";

$paymentService = new PaymentService();
$qrcodes= new QRCodeService();

Stripe::setApiKey(getenv("STRIPE_KEY"));
$sessionID = $_GET['session_id'];


    $session = Session::retrieve($sessionID);
    $paymentIntent = PaymentIntent::retrieve($session->payment_intent);
    $paymentMethod = PaymentMethod::retrieve($paymentIntent->payment_method);
    //$charge = Charge::retrieve($paymentIntent->latest_charge);




    /*echo "<pre>";
    print_r($session);
    echo "</pre>";

    echo "<pre>";
    print_r($paymentIntent);
    echo "</pre>";

    echo "<pre>";
    print_r($paymentMethod);
    echo "</pre>";*/


    $sessionJson = json_encode($session);
    $paymentIntentJson = json_encode($paymentIntent);
    $paymentMethodJson = json_encode($paymentMethod);


// Output to JavaScript console
    /*echo "<script>";
    echo "console.log('Session: ', " . $sessionJson . ");";
    echo "console.log('Invoice Intent: ', " . $paymentIntentJson . ");";
    echo "console.log('Invoice Method: ', " . $paymentMethodJson . ");";
    echo "</script>";*/





     $order = $paymentService->getOrderBySessionID($sessionID);
     if(!$order) {
         echo("Order is not found");
     }
     if( $session['payment_status'] == 'paid'){
         $paymentService->updateOrderStatus($sessionID, Order::ORDER_STATUS_PAID);

         $paymentDateTime = date('Y-m-d H:i:s', $paymentIntent->created + 3600);
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
         $totalAmount = (float)($session->amount_total/100);
         $tax = (float)($session->total_details['amount_tax']/100);
         $currency = $session->currency;

         $invoiceId = $paymentService->createInvoice($paymentDateTime, $customerName, $email, $phoneNumber, $method, $billingAddress, $totalAmount, $tax, $currency, $order->getOrderUUID());
         $paymentService->sendInvoice($invoiceId);

         $paymentService->sendTickets($order->getOrderUUID(), $email, $customerName);

         phpinfo();

         $qrcodes->generateQRCode($order->getOrderUUID());
         Route::redirect('/confirmation');
     } else {
         echo "Payment failed.";
     }


