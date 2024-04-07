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

    //region Create
    public function createRestaurant(array $restaurantData): bool
    {
        return $this->repository->createRestaurant($restaurantData);
    }

    public function createYummyEventDay(array $yummyEventDayData): bool
    {
        return $this->repository->createYummyEventDay($yummyEventDayData);
    }

    public function createSession(array $sessionData): bool
    {
        return $this->repository->createSession($sessionData);
    }
    //endregion

    //region Read
    public function getAllYummy(): array
    {
        return $this->repository->getAllYummy();
    }

    public function getAllRestaurants(): array
    {
        return $this->repository->getAllRestaurants();
    }

    public function getYummyEventDays(): array
    {
        return $this->repository->getYummyEventDays();
    }

    public function getAllSessions(): array
    {
        return $this->repository->getAllSessions();
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

    public function getSessionsByRestaurantId(int $restaurantId): array
    {
        return $this->repository->getSessionsByRestaurantId($restaurantId);
    }
    //endregion

    //region Update
    public function updateYummy(array $yummyData): bool
    {
        $yummyId = $yummyData['YummyID'];

        if (!$this->repository->yummyExists($yummyId)) {
            throw new \Exception("Yummy with ID $yummyId not found.");
        }

        return $this->repository->updateYummy($yummyData);
    }

    public function updateRestaurant(array $restaurantData): bool
    {
        $restaurantId = $restaurantData['RestaurantID'];

        if (!$this->repository->restaurantExists($restaurantId)) {
            throw new \Exception("Restaurant with ID $restaurantId not found.");
        }

        return $this->repository->updateRestaurant($restaurantData);
    }
    //endregion

    //region Delete
    public function deleteRestaurant(int $id): bool
    {
        return $this->repository->deleteRestaurant($id);
    }
    //endregion
}
