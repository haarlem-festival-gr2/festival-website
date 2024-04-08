<?php

namespace service;

use model\Restaurant;
use model\YummyEventDays;
use model\Session;
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

    public function getAllYummyEventDays(): array
    {
        return $this->repository->getAllYummyEventDays();
    }

    public function getAllSessions(): array
    {
        return $this->repository->getAllSessions();
    }

    public function getRestaurantById(int $id): ?Restaurant
    {
        return $this->repository->getRestaurantById($id);
    }

    public function getYummyEventDayById(int $id): ?YummyEventDays
    {
        return $this->repository->getYummyEventDayById($id);
    }

    public function getSessionById(int $id): ?Session
    {
        return $this->repository->getSessionById($id);
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

    public function updateYummyEventDay(array $yummyEventDayData): bool
    {
        $dayId = $yummyEventDayData['DayID'];

        if (!$this->repository->yummyEventDayExists($dayId)) {
            throw new \Exception("Yummy Event Day with ID $dayId not found.");
        }

        return $this->repository->updateYummyEventDay($yummyEventDayData);
    }

    public function updateSession(array $sessionData): bool
    {
        $sessionId = $sessionData['SessionID'];

        if (!$this->repository->sessionExists($sessionId)) {
            throw new \Exception("Session with ID $sessionId not found.");
        }

        return $this->repository->updateSession($sessionData);
    }
    //endregion

    //region Delete
    public function deleteRestaurant(int $id): bool
    {
        return $this->repository->deleteRestaurant($id);
    }

    public function deleteYummyEventDay(int $id): bool
    {
        return $this->repository->deleteYummyEventDay($id);
    }

    public function deleteSession(int $id): bool
    {
        return $this->repository->deleteSession($id);
    }
    //endregion
}
