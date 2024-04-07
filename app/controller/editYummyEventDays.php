<?php

use Core\Route\Method;
use Core\Route\Route;
use Service\RestaurantService;
use Service\ImageService;
use Model\YummyEventDays;

require_once __DIR__ . '/../repository/BaseRepository.php';
require_once __DIR__ . '/../service/RestaurantService.php';

Route::serve('/manageYummyEventDays', function (array $props) {
    $restaurantService = new RestaurantService();
    $imageService = new ImageService();

    if (isset ($props['action'])) {
        $yummyEventDayData = [];
        // Create ReflectionClass for YummyEventDays
        $reflectionClass = new ReflectionClass(YummyEventDays::class);
        // Get public properties of YummyEventDays class
        $properties = $reflectionClass->getProperties(ReflectionProperty::IS_PUBLIC);

        switch ($props['action']) {
            case 'createYummyEventDay':
                foreach ($properties as $property) {
                    if ($property->getName() !== 'DayID') {
                        $propertyName = $property->getName();

                        if ($propertyName === 'Date') {
                            $yummyEventDayData[$propertyName] = $_POST[$propertyName] ?? null;
                        }
                    }
                }

                $restaurantService->createYummyEventDay($yummyEventDayData);

                try {
                    $restaurantService->createYummyEventDay($yummyEventDayData);
                } catch (\Exception $e) {
                    echo 'Error creating yummy event day: ' . $e->getMessage();
                }
                break;

            // Add other cases for edit, delete, etc. if needed

            default:
                // Handle other actions
                break;
        }
    }

    Route::redirect('/manageSchedule');
}, Method::POST);
