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
        ]);
    }
    $_SESSION['filtered'] = $eventCards;
}

Route::serve('/agenda/purchase', function () use ($service) {
    if (Route::auth() === false) {
        Route::redirect('/login');
        return; // just in case, php is weird
    }

    $eventCards = $service->getEventsWithFilter(["History", "Jazz", "Yummy"]);
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

    if (isset($props['event'])) {
        $events = $props['event'];
    }

    $eventCards = [];
    switch ($action) {
        case 'Filter':
            $eventCards = $service->getEventsWithFilter($events);

            if (count($eventCards) == 0) {
                echo 'No results found, please re-check your filters';
            }

            renderCards($eventCards);
            break;
        case 'Add to Cart':
            $event = $_SESSION['filtered'][$props['key']];
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
            ]);
            break;
        default:
            break;
    }
}, Method::POST);
