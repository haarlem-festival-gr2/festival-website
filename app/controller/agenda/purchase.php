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

    $cart = [];

    switch ($action) {
        case 'Filter':
            $output = "";

            $jazzEvents = $service->getJazzEvents();

            foreach ($jazzEvents as $key => $event) {
                $item = Route::template('agenda.event_horiz', [
                    'img' => $event->getImg(),
                    'title' => $event->getName(),
                    'date' => $event->getStartDateTime()->format('jS F Y'),
                    'venue' => $event->getVenue(),
                    'time' => $event->getStartDateTime()->format('H:i'),
                    'cost' => number_format($event->getPrice(), 2),
                ]);
                $output .= $item;
            }

            echo $output;
            break;
        case 'Add to Cart':
            $service->getJazzEvents();
            break;
        default:
            // ¯\_(ツ)_/¯
            break;
    }
}, Method::POST);
