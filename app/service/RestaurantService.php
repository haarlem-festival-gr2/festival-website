<?php

namespace service;

use Repository\RestaurantRepository;

require_once __DIR__.'/../service/BaseService.php';
require_once __DIR__.'/../repository/RestaurantRepository.php';

class RestaurantService extends BaseService
{
    private RestaurantRepository $repository;

    public function __construct()
    {
        $this->repository = new RestaurantRepository();
    }

    public function getRestaurantById(int $id): mixed
    {
        return $this->repository->getRestaurantById($id);
    }
}