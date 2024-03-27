<?php

namespace service;

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

    public function getAllYummy(): array
    {
        return $this->repository->getAllYummy();
    }

    public function getAllRestaurants(): array
    {
        return $this->repository->getAllRestaurants();
    }

    public function getRestaurantById(int $id): mixed
    {
        return $this->repository->getRestaurantById($id);
    }

    public function createRestaurant(array $restaurantData): bool
    {
        return $this->repository->createRestaurant($restaurantData);
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