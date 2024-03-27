<?php

use Core\Route\Method;
use Core\Route\Route;
use Service\RestaurantService;

require_once __DIR__.'/../repository/BaseRepository.php';
require_once __DIR__.'/../service/RestaurantService.php';

Route::serve('/manageRestaurants', function (array $props) {
    $restaurantService = new RestaurantService();

    if (isset($props['action'])) {
        switch ($props['action']) {
            case 'edit':
                break;
            case 'create':
                $restaurantData = [
                    'Title' => $_POST['title'],
                    'SubTitle' => $_POST['subtitle'],
                    'HeaderImg' => $_POST['HeaderImg'],
                    'HeaderAlt' => $_POST['HeaderAlt'],
                    'Category1' => $_POST['Category1'],
                    'Category2' => $_POST['Category2'],
                    'Category3' => $_POST['Category3'],
                    'Location' => $_POST['Location'],
                    'Stars' => $_POST['Stars'],
                    'FoodImg1' => $_POST['FoodImg1'],
                    'FoodAlt1' => $_POST['FoodAlt1'],
                    'FoodImg2' => $_POST['FoodImg2'],
                    'FoodAlt2' => $_POST['FoodAlt2'],
                    'FoodImg3' => $_POST['FoodImg3'],
                    'FoodAlt3' => $_POST['FoodAlt3'],
                    'SessionsADay' => $_POST['SessionsADay'],
                    'SessionsDuration' => $_POST['SessionsDuration'],
                    'SessionsStartTime' => $_POST['SessionsStartTime'],
                    'SessionsTotalSeats' => $_POST['SessionsTotalSeats'],
                    'PriceAdult' => $_POST['PriceAdult'],
                    'PriceChild' => $_POST['PriceChild'],
                    'Recipe' => $_POST['Recipe'],
                    'RecipeImg' => $_POST['RecipeImg'],
                    'RecipeAlt' => $_POST['RecipeAlt'],
                    'Telephone' => $_POST['Telephone'],
                    'Email' => $_POST['Email'],
                    'ChamberOfCommerce' => $_POST['ChamberOfCommerce'],
                ];
                $restaurantService->createRestaurant($restaurantData);
                break;
            case 'delete':
                $restaurantService->deleteRestaurant($props['RestaurantID']);
                break;
        }
    }

    Route::redirect('/manageYummy');
}, Method::POST);
