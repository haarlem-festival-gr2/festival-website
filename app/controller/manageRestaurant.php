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
    $imageService = new ImageService();

    if (isset ($props['action'])) {
        $restaurantData = [];
        $reflectionClass = new ReflectionClass(Restaurant::class);
        $properties = $reflectionClass->getProperties(ReflectionProperty::IS_PUBLIC);

        switch ($props['action']) {
            case 'editYummy':
                foreach ($properties as $property) {
                    $propertyName = $property->getName();

                    if (in_array($propertyName, ['HeaderImg', 'FoodImg1', 'FoodImg2', 'FoodImg3', 'FoodImg4', 'FoodImg5'])) {
                        if (!empty ($_FILES[$propertyName]['tmp_name'])) {
                            try {
                                $imagePath = $imageService->uploadImage($_FILES[$propertyName], 'yummy');
                                $yummyData[$propertyName] = $imagePath;
                            } catch (Exception $e) {
                                echo 'Error uploading ' . $propertyName . ' image: ' . $e->getMessage();
                                return;
                            }
                        } elseif (!empty ($_POST[$propertyName])) {
                            $yummyData[$propertyName] = $_POST[$propertyName];
                        } else {
                            $yummyData[$propertyName] = null;
                        }
                    } else {
                        $yummyData[$propertyName] = $_POST[$propertyName] ?? null;
                    }
                }
                $yummyData['YummyID'] = $_POST['YummyID'] ?? null;

                var_dump($yummyData);

                try {
                    $restaurantService->updateYummy($yummyData);
                    // Handle success
                } catch (\Exception $e) {
                    echo 'Error updating yummy: ' . $e->getMessage();
                    // Handle error
                }
                break;

            case 'edit':
                foreach ($properties as $property) {
                    $propertyName = $property->getName();

                    if (in_array($propertyName, ['HeaderImg', 'FoodImg1', 'FoodImg2', 'FoodImg3', 'RecipeImg'])) {
                        if (!empty ($_FILES[$propertyName]['tmp_name'])) {
                            try {
                                $imagePath = $imageService->uploadImage($_FILES[$propertyName], 'yummy');
                                $restaurantData[$propertyName] = $imagePath;
                            } catch (Exception $e) {
                                echo 'Error uploading ' . $propertyName . ' image: ' . $e->getMessage();
                                return;
                            }
                        } elseif (!empty ($_POST[$propertyName])) {
                            $restaurantData[$propertyName] = $_POST[$propertyName];
                        } else {
                            $restaurantData[$propertyName] = null;
                        }
                    } else {
                        $restaurantData[$propertyName] = $_POST[$propertyName] ?? null;
                    }
                }
                $restaurantService->updateRestaurant($restaurantData);
                break;

            case 'create':
                foreach ($properties as $property) {
                    if ($property->getName() !== 'RestaurantID') {
                        $propertyName = $property->getName();

                        if (in_array($propertyName, ['HeaderImg', 'FoodImg1', 'FoodImg2', 'FoodImg3', 'RecipeImg'])) {
                            if (isset ($_FILES[$propertyName])) {
                                try {
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
