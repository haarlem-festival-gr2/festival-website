<?php

use Core\Route\Method;
use Core\Route\Route;

Route::serve('/payment', function (array $props) {

    $cart = [['name' => 'Ticket name', 'price' => 12 * 100, 'quantity' => 5],['name' => 'Ticket name', 'price' => 12 * 100, 'quantity' => 5],['name' => 'Ticket name', 'price' => 12 * 100, 'quantity' => 5],['name' => 'Ticket name', 'price' => 12 * 100, 'quantity' => 5]];

    //  IN DB STORE
    // name, price, quantity, userid
    // TABLE: PaidTickets

    $addr = $_SERVER['SERVER_ADDR'];
    $port = $_SERVER['SERVER_PORT'];
    $server = "$addr:$port";

    \Stripe\Stripe::setApiKey(getenv("STRIPE_KEY"));

    $session = \Stripe\Checkout\Session::create([
        'line_items' => [[
              'price_data' => [
                'currency' => 'eur',
                'product_data' => [
                  'name' => 'WABA LABA DUB DUB',
                ],
                'unit_amount' => 12 * 100, // in cents
              ],
              'quantity' => 3,
            ],
        ],
        'mode' => 'payment',
        'success_url' => "http://localhost:8080/success",
        'cancel_url' => "http://localhost:8080/suckstosuck",
    ]);

    Route::redirect($session->url);

}, Method::GET);
