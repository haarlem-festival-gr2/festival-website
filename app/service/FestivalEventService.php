<?php

namespace service;

use repository\FestivalEventRepository;

require_once __DIR__.'/../service/BaseService.php';
require_once __DIR__.'/../repository/FestivalEventRepository.php';

class FestivalEventService extends BaseService
{
    private FestivalEventRepository $repository;

    public function __construct()
    {
        $this->repository = new FestivalEventRepository();
    }

    public function getFestivalEventByName(string $name): mixed
    {
        return $this->repository->getFestivalEventByName($name);
    }
}
