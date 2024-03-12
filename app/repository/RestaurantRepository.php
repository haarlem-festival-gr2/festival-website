<?php

namespace repository;

use Model\Restaurant;

require_once __DIR__ . '/../repository/BaseRepository.php';
require_once __DIR__ . '/../model/Restaurant.php';
require_once __DIR__ . '/../model/Session.php';

class RestaurantRepository extends BaseRepository
{
    public function getRestaurantById(int $id): ?Restaurant
    {
        $query = $this->connection->prepare('SELECT * FROM Restaurant WHERE RestaurantID = ?');
        $query->execute([$id]);

        $query->setFetchMode(\PDO::FETCH_CLASS, "\Model\Restaurant");

        return $query->fetch();
    }

    public function getAllRestaurants(): array
    {

    }

    public function createRestaurant(Restaurant $restaurant): bool
    {

    }

    public function updateRestaurant(Restaurant $restaurant): bool
    {

    }

    public function deleteRestaurant(int $id): bool
    {
        
    }

    public function getSessionsByRestaurantId(int $restaurantId): array
    {
        
    }

}