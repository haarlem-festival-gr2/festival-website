<?php

use Core\Route\Method;
use Core\Route\Route;
use Service\RestaurantService;
use Model\YummyEventDays;
use Model\Session;

require_once __DIR__ . '/../repository/BaseRepository.php';
require_once __DIR__ . '/../service/RestaurantService.php';

Route::serve('/manageYummyEventDays', function (array $props) {
    $restaurantService = new RestaurantService();

    if (isset ($props['action'])) {

        $yummyEventDaysReflectionClass = new ReflectionClass(YummyEventDays::class);
        $sessionReflectionClass = new ReflectionClass(Session::class);

        $yummyEventDayProperties = $yummyEventDaysReflectionClass->getProperties(ReflectionProperty::IS_PUBLIC);
        $sessionProperties = $sessionReflectionClass->getProperties(ReflectionProperty::IS_PUBLIC);

        switch ($props['action']) {
            case 'createSession':
                $sessionData = [];
                foreach ($sessionProperties as $property) {
                    if ($property->getName() !== 'SessionID') {
                        $propertyName = $property->getName();

                        if (in_array($propertyName, ['StartDateTime', 'EndDateTime'])) {
                            $sessionData[$propertyName] = $_POST[$propertyName] ?? null;
                        } else {
                            $sessionData[$propertyName] = $_POST[$propertyName] ?? null;
                        }
                    }
                }
                $restaurantService->createSession($sessionData);

                break;
            case 'createYummyEventDay':
                $yummyEventDayData = [];
                foreach ($yummyEventDayProperties as $property) {
                    if ($property->getName() !== 'DayID') {
                        $propertyName = $property->getName();

                        if ($propertyName === 'Date') {
                            $yummyEventDayData[$propertyName] = $_POST[$propertyName] ?? null;
                        }
                    }
                }
                $restaurantService->createYummyEventDay($yummyEventDayData);
                break;

            case 'deleteSession':
                $restaurantService->deleteSession($props['SessionID']);
                break;

            case 'deleteYummyEventDay':
                $restaurantService->deleteYummyEventDay($props['DayID']);
                break;
        }
    }

    Route::redirect('/manageSchedule');
}, Method::POST);
