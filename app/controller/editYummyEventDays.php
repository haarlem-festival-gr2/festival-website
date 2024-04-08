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

            case 'editSession':
                foreach ($sessionProperties as $property) {
                    $propertyName = $property->getName();
                    $sessionData[$propertyName] = $_POST[$propertyName] ?? null;
                }
                try {
                    $restaurantService->updateSession($sessionData);
                } catch (\Exception $e) {
                    echo 'Error editing Session: ' . $e->getMessage();
                }
                break;


            case 'editYummyEventDay':
                foreach ($yummyEventDayProperties as $property) {
                    $propertyName = $property->getName();
                    $yummyEventDayData[$propertyName] = $_POST[$propertyName] ?? null;
                }
                try {
                    $restaurantService->updateYummyEventDay($yummyEventDayData);
                } catch (\Exception $e) {
                    echo 'Error editing YummyEventDay: ' . $e->getMessage();
                }
                break;

            case 'deleteSession':
                try {
                    $restaurantService->deleteSession($props['SessionID']);
                } catch (\Exception $e) {
                    echo 'Error deleting Session: ' . $e->getMessage();
                }
                break;

            case 'deleteYummyEventDay':
                try {
                    $restaurantService->deleteYummyEventDay($props['DayID']);
                } catch (\Exception $e) {
                    echo 'Error deleting YummyEventDay: ' . $e->getMessage();
                }
                break;
        }
    }

    Route::redirect('/manageSchedule');
}, Method::POST);
