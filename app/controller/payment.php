<?php

use Core\Route\Method;
use Core\Route\Route;
use model\Order;
use model\Ticket;
use Service\PaymentService;
use Stripe\Checkout\Session;
use Stripe\Stripe;

/*Invoice succeeds - 4242 4242 4242 4242
Invoice requires authentication - 4000 0025 0000 3155
Invoice is declined - 4000 0000 0000 9995*/

require_once __DIR__.'/../model/Order.php';
require_once __DIR__ . '/../model/Ticket.php';
require_once __DIR__.'/../service/PaymentService.php';

Route::serve('/payment', function (array $props) {

    // user has to be logged it to buy tickets
    $user = Route::auth();
    if (!$user) {
        Route::redirect('/login');
    } // how to show the message to log in and also store cart?

    $paymentService = new PaymentService();

    //$cart = $props['cart'];

    $cart = $paymentService->get5events();
    $cart1 = $paymentService->get3events();
    $cart = array_merge($cart, $cart1);

    $events = [];
    foreach ($cart as $item) {
        $itemIndex = null;
        foreach ($events as $index => $eventItem) {
            if ($eventItem['event']->getID() === $item->getID()) {
                $itemIndex = $index;
                break;
            }
        }
        if ($itemIndex !== null) {
            $events[$itemIndex]['quantity']++;
        } else {
            $events[] = [
                'event' => $item,
                'quantity' => 1
            ];
        }
    }

    ///////////////////////////////////////////////////////////////////////////////////////////

    $tickets = [];
    $totalPrice = 0;

    foreach ($events as $eventData) {
        $event = $eventData['event'];
        $ticket = new Ticket();
        $ticket->setEventName($event->getName());
        $ticket->setVenue($event->getVenue());
        $ticket->setStartDateTime($event->getStartDateTime());
        $ticket->setEndDateTime($event->getEndDateTime());
        $ticket->setPrice($event->getPrice());
        $ticket->setQuantity($eventData['quantity']);
        $ticket->setIsScanned(false);
        $ticket->setCustomerName($user->Name);

        $tickets[] = $ticket;
        $totalPrice += $ticket->getPrice() * $ticket->getQuantity();
    }

    $lineItems = [];
    foreach ($tickets as $ticket) {
        $lineItems[] = [
            'quantity' => $ticket->getQuantity(),
            'tax_rates' => ['txr_1OzSdc09Czi7f69FhRqATKYo'],
            'price_data' => [
                'currency' => 'eur',
                'unit_amount' => $ticket->getPrice() * 100, // in cents
                'product_data' => [
                    'name' => $ticket->getEventName(),
                    'description' => $ticket->getVenue(),
                ],
            ],
        ];
    }

    Stripe::setApiKey(getenv("STRIPE_KEY"));


        $session = Session::create([
            'mode' => 'payment',
            'phone_number_collection' => ['enabled' => true],
            'line_items' => $lineItems,
            'consent_collection' => ['terms_of_service' => 'required'],
            'custom_text' => [
                'terms_of_service_acceptance' => [
                    'message' => 'I agree to the [Terms of Service](https://example.com/terms)',
                ],
                'submit' => ['message' => 'Your tickets will be sent to the provided email address.'],
            ],
            'success_url' => "http://localhost:8080/success?session_id={CHECKOUT_SESSION_ID}",
            'cancel_url' => "http://localhost:8080/agenda",
            'billing_address_collection' => 'required',
        ]);


    $order = new Order();
    $order->SetStatus(Order::ORDER_STATUS_UNPAID);
    $order->SetTotalPrice($totalPrice);
    $order->SetSessionID($session->id);
    $order->SetTickets($tickets);
    $order->SetUserID($user->UserID);

    $paymentService->saveOrder($order);

    Route::redirect($session->url);
}, Method::GET);

