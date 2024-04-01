<?php

use Core\Route\Method;
use Core\Route\Route;
use model\Order;
use model\OrderItem;
use Service\PaymentService;
use Stripe\Checkout\Session;
use Stripe\Stripe;

/*Payment succeeds - 4242 4242 4242 4242
Payment requires authentication - 4000 0025 0000 3155
Payment is declined - 4000 0000 0000 9995*/

require_once __DIR__ . '/../model/Order.php';
require_once __DIR__ . '/../model/OrderItem.php';
require_once __DIR__ . '/../service/PaymentService.php';

Route::serve('/payment', function (array $props) {

    $user = Route::auth();
    if (!$user) {
        Route::redirect('/login');
    }

    // card is empty
    /*$cart = $props['cart'];
    if(!$cart) {
        Route::redirect('/agenda');
    }*/

    $paymentService = new PaymentService();

    // temporary cart
    $cart = $paymentService->get3events();

    // counts the quantity of each item in the cart
    $events = [];
    foreach ($cart as $item) {
        $itemId = $item->getID();
        if (!isset($events[$itemId])) {
            $events[$itemId] = [
                'event' => $item,
                'quantity' => 1
            ];
        } else {
            $events[$itemId]['quantity']++;
        }
    }

    // creates order items
    $orderItems = [];
    $totalPrice = 0;

    foreach ($events as $eventData) {
        $event = $eventData['event'];
        $orderItem = new OrderItem();
        $orderItem->setEventName($event->getName());
        $orderItem->setVenue($event->getVenue());
        $orderItem->setStartDateTime($event->getStartDateTime());
        $orderItem->setEndDateTime($event->getEndDateTime());
        $orderItem->setPrice($event->getPrice());
        $orderItem->setQuantity($eventData['quantity']);
        $orderItem->setCustomerName($user->Name);
        $orderItem->setEventID($event->getID());
        $orderItem->setType($event->getType());
        if($event->getType() == 'YUMMY') {
            $orderItem->setNote('This is the reservation fee for the restaurant.');
        }
        $orderItems[] = $orderItem;
        $totalPrice += $orderItem->getPrice() * $orderItem->getQuantity();
    }

    $lineItems = [];
    foreach ($orderItems as $orderItem) {
        $lineItems[] = [
            'quantity' => $orderItem->getQuantity(),
            'tax_rates' => ['txr_1OzSdc09Czi7f69FhRqATKYo'],
            'price_data' => [
                'currency' => 'eur',
                'unit_amount' => $orderItem->getPrice() * 100, // in cents
                'product_data' => [
                    'name' => $orderItem->getEventName(),
                    'description' => $orderItem->getVenue() . (empty($orderItem->getNote()) ? '' : ' - ' . $orderItem->getNote()),
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
            'cancel_url' => "http://localhost:8080/cancelPayment?session_id={CHECKOUT_SESSION_ID}",
            'billing_address_collection' => 'required',
        ]);

    // create order
    $order = new Order();
    $order->SetStatus(Order::ORDER_STATUS_UNPAID);
    $order->SetTotalPrice($totalPrice);
    $order->SetSessionID($session->id);
    $order->setOrderItems($orderItems);
    $order->SetUserID($user->UserID);

    $paymentService->saveOrder($order);

    Route::redirect($session->url);
}, Method::GET);

