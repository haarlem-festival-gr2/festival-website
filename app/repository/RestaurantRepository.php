<?php

namespace repository;

use Model\Restaurant;

require_once __DIR__ . '/../repository/BaseRepository.php';
require_once __DIR__ . '/../model/Restaurant.php';
require_once __DIR__ . '/../model/Session.php';
require_once __DIR__ . '/../model/YummyEventDays.php';
require_once __DIR__ . '/../model/YummyHome.php';

class RestaurantRepository extends BaseRepository
{
    public function createRestaurant(array $restaurantData): bool
    {
        $query = $this->connection->prepare('
        INSERT INTO Restaurant (
            Title, SubTitle, HeaderImg, HeaderAlt, Category1, Category2, Category3, Location, Stars, FoodImg1, FoodAlt1, FoodImg2,
            FoodAlt2, FoodImg3, FoodAlt3, SessionsADay, SessionsDuration, SessionsStartTime, SessionsTotalSeats, PriceAdult,
            PriceChild, Recipe, RecipeImg, RecipeAlt, Telephone, Email, ChamberOfCommerce
        ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
    ');

        $data = [];

        foreach ($restaurantData as $key => $value) {
            $data[] = $value;
        }

        return $query->execute($data);
    }

    public function getAllYummy(): array
    {
        $query = $this->connection->prepare('SELECT * FROM YummyHome WHERE YummyID');
        $query->execute();

        $yummies = $query->fetchAll(\PDO::FETCH_CLASS, "\Model\YummyHome");

        return $yummies;
    }

    public function getAllRestaurants(): array
    {
        $query = $this->connection->prepare('SELECT * FROM Restaurant');
        $query->execute();

        $restaurants = $query->fetchAll(\PDO::FETCH_CLASS, "\Model\Restaurant");

        return $restaurants;
    }

    public function getRestaurantById(int $id): ?Restaurant
    {
        $query = $this->connection->prepare('SELECT * FROM Restaurant WHERE RestaurantID = ?');
        $query->execute([$id]);

        $query->setFetchMode(\PDO::FETCH_CLASS, "\Model\Restaurant");

        $restaurant = $query->fetch();

        if ($restaurant === false) {
            return null;
        }

        return $restaurant;
    }

    public function restaurantExists(int $id): bool
    {
        $query = $this->connection->prepare('SELECT COUNT(*) FROM Restaurant WHERE RestaurantID = ?');
        $query->execute([$id]);

        return $query->fetchColumn() > 0;
    }

    public function updateRestaurant(int $id, array $restaurantData): bool
    {
        $query = $this->connection->prepare('
        UPDATE Restaurant SET
            Title = ?, SubTitle = ?, HeaderImg = ?, HeaderAlt = ?, Category1 = ?, Category2 = ?, Category3 = ?, Location = ?, Stars = ?, FoodImg1 = ?, 
            FoodAlt1 = ?, FoodImg2 = ?, FoodAlt2 = ?, FoodImg3 = ?, FoodAlt3 = ?, SessionsADay = ?, SessionsDuration = ?, SessionsStartTime = ?, SessionsTotalSeats = ?, 
            PriceAdult = ?, PriceChild = ?, Recipe = ?, RecipeImg = ?, RecipeAlt = ?, Telephone = ?, Email = ?, ChamberOfCommerce = ?
        WHERE RestaurantID = ?
    ');

        $data = [];

        foreach ($restaurantData as $value) {
            $data[] = $value;
        }

        return $query->execute($data);
    }

    public function deleteRestaurant(int $id): bool
    {
        $query = $this->connection->prepare('DELETE FROM Restaurant WHERE RestaurantID = ?');
        $success = $query->execute([$id]);

        return $success;
    }

    public function getSessionsByRestaurantId(int $restaurantId): array
    {
        $query = $this->connection->prepare('SELECT * FROM Session WHERE RestaurantID = ?');
        $query->execute([$restaurantId]);

        $query->setFetchMode(\PDO::FETCH_CLASS, "\Model\Session");

        return $query->fetchAll();
    }

    public function getYummyEventDays(): array
    {
        $query = $this->connection->prepare('SELECT * FROM YummyEventDays');
        $query->execute();

        $yummyEventDays = $query->fetchAll(\PDO::FETCH_CLASS, "\Model\YummyEventDays");

        return $yummyEventDays;
    }
}
