<?php

namespace repository;

use Model\Restaurant;
use Model\Session;
use Model\YummyEventDays;

require_once __DIR__ . '/../repository/BaseRepository.php';
require_once __DIR__ . '/../model/Restaurant.php';
require_once __DIR__ . '/../model/Session.php';
require_once __DIR__ . '/../model/YummyEventDays.php';

class RestaurantRepository extends BaseRepository
{
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

        return $query->fetch();
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