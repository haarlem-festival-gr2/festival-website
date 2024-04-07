<?php

namespace repository;

use Model\Restaurant;
use PDO;

require_once __DIR__ . '/../repository/BaseRepository.php';
require_once __DIR__ . '/../model/Restaurant.php';
require_once __DIR__ . '/../model/Session.php';
require_once __DIR__ . '/../model/YummyEventDays.php';
require_once __DIR__ . '/../model/YummyHome.php';

class RestaurantRepository extends BaseRepository
{
    //region Create
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

    public function createYummyEventDay(array $yummyEventDayData): bool
    {
        // Prepare the SQL query with placeholders for the columns to insert
        $query = $this->connection->prepare('
        INSERT INTO YummyEventDays (DayID, Date) VALUES (?, ?)
    ');

        // Extract the values from the $yummyEventDayData array
        $dayId = $yummyEventDayData['DayID'] ?? null;
        $date = $yummyEventDayData['Date'] ?? null;

        // Bind the values to the prepared statement
        $query->bindParam(1, $dayId, PDO::PARAM_INT);
        $query->bindParam(2, $date, PDO::PARAM_STR);

        // Execute the query
        return $query->execute();
    }


    public function createSession(array $sessionData): bool
    {
        $query = $this->connection->prepare('
        INSERT INTO Session (
            SessionID, RestaurantID, DayID, Name, Description, StartDateTime, EndDateTime, TotalSeats, RemainingSeats
        ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)
    ');
        $data = [];

        foreach ($sessionData as $key => $value) {
            $data[] = $value;
        }

        return $query->execute($data);
    }
    //endregion

    //region Read
    public function getAllYummy(): array
    {
        $query = $this->connection->prepare('SELECT * FROM YummyHome');
        $query->execute();

        $yummies = $query->fetchAll(PDO::FETCH_CLASS, "\Model\YummyHome");

        return $yummies;
    }

    public function getAllRestaurants(): array
    {
        $query = $this->connection->prepare('SELECT * FROM Restaurant');
        $query->execute();

        $restaurants = $query->fetchAll(PDO::FETCH_CLASS, "\Model\Restaurant");

        return $restaurants;
    }

    public function getRestaurantById(int $id): ?Restaurant
    {
        $query = $this->connection->prepare('SELECT * FROM Restaurant WHERE RestaurantID = ?');
        $query->execute([$id]);

        $query->setFetchMode(PDO::FETCH_CLASS, "\Model\Restaurant");

        $restaurant = $query->fetch();

        if ($restaurant === false) {
            return null;
        }

        return $restaurant;
    }

    public function yummyExists(int $id): bool
    {
        $query = $this->connection->prepare('SELECT COUNT(*) FROM YummyHome WHERE YummyID = ?');
        $query->execute([$id]);

        return $query->fetchColumn() > 0;
    }

    public function restaurantExists(int $id): bool
    {
        $query = $this->connection->prepare('SELECT COUNT(*) FROM Restaurant WHERE RestaurantID = ?');
        $query->execute([$id]);

        return $query->fetchColumn() > 0;
    }

    public function getAllSessions(): array
    {
        $query = $this->connection->prepare('SELECT * FROM Session');
        $query->execute();

        $query->setFetchMode(PDO::FETCH_CLASS, "\Model\Session");

        return $query->fetchAll();
    }

    public function getSessionsByRestaurantId(int $restaurantId): array
    {
        $query = $this->connection->prepare('SELECT * FROM Session WHERE RestaurantID = ?');
        $query->execute([$restaurantId]);

        $query->setFetchMode(PDO::FETCH_CLASS, "\Model\Session");

        return $query->fetchAll();
    }

    public function getYummyEventDays(): array
    {
        $query = $this->connection->prepare('SELECT * FROM YummyEventDays');
        $query->execute();

        $yummyEventDays = $query->fetchAll(PDO::FETCH_CLASS, "\Model\YummyEventDays");

        return $yummyEventDays;
    }
    //endregion

    //region Update
    public function updateYummy(array $yummyData): bool
    {
        $sql = 'UPDATE YummyHome SET ';
        $data = [];

        foreach ($yummyData as $key => $value) {
            if ($key === 'YummyID') {
                continue;
            }

            // If value is not empty, add to the SQL query and $data[]
            if (!empty($value)) {
                $sql .= $key . ' = ?, ';
                $data[] = $value;
            }
        }

        // Remove comma and space from SQL query
        $sql = rtrim($sql, ', ');

        $sql .= ' WHERE YummyID = ?';

        $data[] = $yummyData['YummyID'];

        $query = $this->connection->prepare($sql);
        return $query->execute($data);
    }

    public function updateRestaurant(array $restaurantData): bool
    {
        $sql = 'UPDATE Restaurant SET ';
        $data = [];

        foreach ($restaurantData as $key => $value) {
            if ($key === 'RestaurantID') {
                continue;
            }

            // If value is not empty, add to the SQL query and $data[]
            if (!empty($value)) {
                $sql .= $key . ' = ?, ';
                $data[] = $value;
            }
        }

        // Remove comma and space from SQL query
        $sql = rtrim($sql, ', ');

        $sql .= ' WHERE RestaurantID = ?';

        $data[] = $restaurantData['RestaurantID'];

        $query = $this->connection->prepare($sql);
        return $query->execute($data);
    }
    //endregion

    //region Delete
    public function deleteRestaurant(int $id): bool
    {
        $query = $this->connection->prepare('DELETE FROM Restaurant WHERE RestaurantID = ?');
        $success = $query->execute([$id]);

        return $success;
    }
    //endregion
}
