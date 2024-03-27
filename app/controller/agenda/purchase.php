<?php

use Core\Route\Method;
use Core\Route\Route;
use Service\EventService;

Route::serve('/agenda/purchase', function () {
    Route::render('agenda.purchase', []);
}, Method::GET);

Route::serve('/agenda/purchase', function ($props) {
    $service = new EventService();
    $action = $props['action'];
    $events = [];

    if (isset($props['event'])) {
        $events = $props['event'];
    }

    $cart = [];

    $eventCards = $service->getEventsWithFilter($events);
    switch ($action) {
        case 'Filter':
            if (count($eventCards) == 0) {
                echo "No results found, please re-check your filters";
            }

            foreach ($eventCards as $key => $event) {
                $item = Route::render('agenda.event_horiz', [
                    'img' => $event->getImg(),
                    'title' => $event->getName(),
                    'date' => $event->getStartDateTime()->format('jS F Y'),
                    'venue' => $event->getVenue(),
                    'time' => $event->getStartDateTime()->format('H:i'),
                    'cost' => number_format($event->getPrice(), 2),
                    'id' => $key,
                    'bg' => $event->getCssClass(),
                ]);
            }
            break;
        case 'Add to Cart':
            Route::render("agenda.cart_item", ['item' => $eventCards[$props['id']]]);
            break;
        default:
            // ¯\_(ツ)_/¯
            break;
    }
}, Method::POST);
