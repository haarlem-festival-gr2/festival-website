<?php

namespace service;

use model\Restaurant;
use Repository\RestaurantRepository;

require_once __DIR__ . '/../service/BaseService.php';
require_once __DIR__ . '/../repository/RestaurantRepository.php';

class RestaurantService extends BaseService
{
    private RestaurantRepository $repository;

    public function __construct()
    {
        $this->repository = new RestaurantRepository();
    }

    public function createRestaurant(array $restaurantData): bool
    {
        return $this->repository->createRestaurant($restaurantData);
    }

    public function getAllYummy(): array
    {
        return $this->repository->getAllYummy();
    }

    public function getAllRestaurants(): array
    {
        return $this->repository->getAllRestaurants();
    }

    public function getRestaurantById(int $id): ?Restaurant
    {
        return $this->repository->getRestaurantById($id);

        if ($restaurant) {
            return $restaurant;
        } else {
            return null;
        }
    }

    public function updateRestaurant(array $restaurantData): bool
    {
        $restaurantId = $restaurantData['RestaurantID'];

        if (!$this->repository->restaurantExists($restaurantId)) {
            throw new \Exception("Restaurant with ID $restaurantId not found.");
        }

        return $this->repository->updateRestaurant($restaurantId, $restaurantData);
    }

    public function deleteRestaurant(int $id): bool
    {
        return $this->repository->deleteRestaurant($id);
    }

    public function getSessionsByRestaurantId(int $restaurantId): array
    {
        return $this->repository->getSessionsByRestaurantId($restaurantId);
    }

    public function getYummyEventDays(): array
    {
        return $this->repository->getYummyEventDays();
    }
}
