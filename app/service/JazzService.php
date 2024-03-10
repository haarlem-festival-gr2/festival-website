<?php

namespace service;

use Repository\JazzRepository;

require_once __DIR__.'/../service/BaseService.php';
require_once __DIR__.'/../repository/JazzRepository.php';

class JazzService extends BaseService
{
    private JazzRepository $repository;

    public function __construct()
    {
        $this->repository = new JazzRepository();
    }

    public function getArtistById(int $id): mixed
    {
        return $this->repository->getArtistById($id);
    }

    public function getVenueById(int $id): mixed
    {
        return $this->repository->getVenueById($id);
    }

    public function getJazzDayById(int $id): mixed
    {
        return $this->repository->getJazzDayById($id);
    }

    public function getAllJazzDays(): array
    {
        return $this->repository->getAllJazzDays();
    }

    public function getPerformanceById(int $id): mixed
    {
        return $this->repository->getPerformanceById($id);
    }

    public function getPerformancesByArtistId(int $artistId): array
    {
        return $this->repository->getPerformancesByArtistId($artistId);
    }

    public function getPerformancesByJazzDay(int $dayID): array
    {
        return $this->repository->getPerformancesByJazzDay($dayID);
    }

    public function getJazzPassesByDate(string $date): array
    {
        return $this->repository->getJazzPassesByDate($date);
    }

    public function getSongsByArtistId(int $artistId): array
    {
        return $this->repository->getSongsByArtistId($artistId);
    }

    public function getAlbumsByArtistId(int $artistId): array
    {
        return $this->repository->getAlbumsByArtistId($artistId);
    }
}