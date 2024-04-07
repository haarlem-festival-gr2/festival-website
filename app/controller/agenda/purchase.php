<?php

use Core\Route\Method;
use Core\Route\Route;
use Service\EventService;

$service = new EventService();

function renderCards(array $eventCards) {
    foreach ($eventCards as $key => $event) {
        $item = Route::render('agenda.event_horiz', [
            'img' => $event->getImg(),
            'title' => $event->getName(),
            'date' => $event->getStartDateTime()->format('jS F Y'),
            'venue' => $event->getVenue(),
            'time' => $event->getStartDateTime()->format('H:i'),
            'cost' => number_format($event->getPrice(), 2),
            'key' => $key,
            'bg' => $event->getCssClass(),
            'max' => $event->getTotalTickets(),
        ]);
    }
    $_SESSION['filtered'] = $eventCards;
}

Route::serve('/agenda/purchase', function ($props) use ($service) {
    $_SESSION['cart'] = [];

    if (Route::auth() === false) {
        Route::redirect('/login');
        return; // just in case, php is weird
    }

    $name = '';
    if (isset($props['name'])) {
        $name = $props['name'];
    }

    $eventCards = $service->getEventsWithFilter([["History", "Jazz", "Yummy"], [25,26,27,28]], $name);
    $renderDefault = function () use ($eventCards) {
        renderCards($eventCards);
    };


    Route::render('agenda.purchase', ['renderDefault' => $renderDefault, 'cart' => []]);

}, Method::GET);

Route::serve('/agenda/purchase', function ($props) use ($service) {
    if (Route::auth() === false) {
        Route::redirect('/login');
        return; // just in case, php is weird
    }

    $action = $props['action'];
    $events = [];
    $dates = [];
    $name = '';

    if (isset($props['event'])) {
        $events = $props['event'];
    }

    if (isset($props['day'])) {
        $dates = $props['day'];
    }

    if (isset($props['name'])) {
        $name = $props['name'];
    }

    $eventCards = [];
    switch ($action) {
        case 'Filter':
            $eventCards = $service->getEventsWithFilter([$events, $dates], $name);

            if (count($eventCards) == 0) {
                echo 'No results found, please re-check your filters';
            }

            renderCards($eventCards);
            break;
        case 'Remove all':
            $event = $_SESSION['filtered'][$props['key']];

            $cartKey = $props['cartkey'];

            $_SESSION['cart'][$cartKey] = null;

            Route::render('agenda.oob_event_horiz', [
                'img' => $event->getImg(),
                'title' => $event->getName(),
                'date' => $event->getStartDateTime()->format('jS F Y'),
                'venue' => $event->getVenue(),
                'time' => $event->getStartDateTime()->format('H:i'),
                'cost' => number_format($event->getPrice(), 2),
                'key' => $props['key'],
                'id' => $event->getID(),
                'bg' => $event->getCssClass(),
                'max' => $event->getTotalTickets(),
            ]);
            break;
        case 'Add to Cart':
            $event = $_SESSION['filtered'][$props['key']];

            $quant = $props['quantity'];

            if ($quant > $event->getTotalTickets()) {
                $quant = $event->getTotalTickets();
            }

            $event->Quantity = $quant;

            $cartKey = count($_SESSION['cart']);
            $_SESSION['cart'][] = $event;

            Route::render('agenda.cart_item', [
                'img' => $event->getImg(),
                'title' => $event->getName(),
                'date' => $event->getStartDateTime()->format('jS F Y'),
                'venue' => $event->getVenue(),
                'time' => $event->getStartDateTime()->format('H:i'),
                'cost' => number_format($event->getPrice(), 2),
                'key' => $props['key'],
                'id' => $event->getID(),
                'bg' => $event->getCssClass(),
                'max' => $event->getTotalTickets(),
                'cartkey' => $cartKey,
                'quantity' => $event->Quantity,
            ]);
            break;
        case 'Pay for your cart':
            Route::redirect('/payment');
            break;
        default:
            http_response_code(422);
            echo "422 Unprocessable Entity";
            exit;
            break;
    }
}, Method::POST);
