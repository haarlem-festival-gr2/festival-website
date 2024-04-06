<?php

use Core\Route\Method;
use Core\Route\Route;
use Service\RestaurantService;
use Service\ImageService;
use model\Restaurant;

require_once __DIR__ . '/../repository/BaseRepository.php';
require_once __DIR__ . '/../service/RestaurantService.php';

Route::serve('/manageRestaurants', function (array $props) {
    $restaurantService = new RestaurantService();

    if (isset ($props['action'])) {
        switch ($props['action']) {
            case 'edit':
                $restaurantData = [];
                $reflectionClass = new ReflectionClass(Restaurant::class);
                $properties = $reflectionClass->getProperties(ReflectionProperty::IS_PUBLIC);

                foreach ($properties as $property) {
                    $propertyName = $property->getName();

                    if (in_array($propertyName, ['HeaderImg', 'FoodImg1', 'FoodImg2', 'FoodImg3', 'RecipeImg'])) {
                        // Check if a file is provided and it's not empty
                        if (!empty ($_FILES[$propertyName]['tmp_name'])) {
                            try {
                                $imageService = new ImageService();
                                $imagePath = $imageService->uploadImage($_FILES[$propertyName], 'yummy');
                                $restaurantData[$propertyName] = $imagePath;
                            } catch (Exception $e) {
                                echo 'Error uploading ' . $propertyName . ' image: ' . $e->getMessage();
                                return;
                            }
                        } elseif (!empty ($_POST[$propertyName])) {
                            // If no file is uploaded, but a value exists in the form, retain the existing value
                            $restaurantData[$propertyName] = $_POST[$propertyName];
                        } else {
                            // If no file is uploaded and no value exists in the form, set the value to null
                            $restaurantData[$propertyName] = null;
                        }
                    } else {
                        // For non-image fields, directly set the value from $_POST
                        $restaurantData[$propertyName] = $_POST[$propertyName] ?? null;
                    }
                }


                $restaurantService->updateRestaurant($restaurantData);
                break;
            case 'create':
                $restaurantData = [];
                $reflectionClass = new ReflectionClass(Restaurant::class);
                $properties = $reflectionClass->getProperties(ReflectionProperty::IS_PUBLIC);
                foreach ($properties as $property) {
                    if ($property->getName() !== 'RestaurantID') {
                        $propertyName = $property->getName();

                        if (in_array($propertyName, ['HeaderImg', 'FoodImg1', 'FoodImg2', 'FoodImg3', 'RecipeImg'])) {
                            if (isset ($_FILES[$propertyName])) {
                                try {
                                    $imageService = new ImageService();
                                    $imagePath = $imageService->uploadImage($_FILES[$propertyName], 'yummy');
                                    $restaurantData[$propertyName] = $imagePath;
                                } catch (Exception $e) {
                                    echo 'Error uploading ' . $propertyName . ' image: ' . $e->getMessage();
                                    return;
                                }
                            }
                        } else {
                            $restaurantData[$propertyName] = $_POST[$propertyName];
                        }
                    }
                }
                $restaurantService->createRestaurant($restaurantData);
                break;
            case 'delete':
                $restaurantService->deleteRestaurant($props['RestaurantID']);
                break;
        }
    }

    Route::redirect('/manageYummy');
}, Method::POST);
