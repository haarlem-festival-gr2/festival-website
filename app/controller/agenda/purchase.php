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

    switch ($action) {
        case 'Filter':
            $eventCards = $service->getEventsWithFilter($events);

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
                    'id' => $event->getID(),
                    'bg' => $event->getCssClass(),
                ]);
            }

            break;
        case 'Add to Cart':
            var_dump($props);
            break;
        default:
            // ¯\_(ツ)_/¯
            break;
    }
}, Method::POST);
