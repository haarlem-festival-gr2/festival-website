<?php

namespace Service;

use Repository\HistoryRepository;

require_once __DIR__.'/../repository/HistoryRepository.php';

class HistoryService
{
    private $historyRepository;

    public function __construct()
    {
        $this->historyRepository = new HistoryRepository();
    }

    public function getHistoryDays(): array
    {
        return $this->historyRepository->getHistoryDays();
    }

    public function getHistoryLanguages(): array
    {
        return $this->historyRepository->getHistoryLanguages();
    }

    public function getTicketsByDay(int $dayID): array
    {
        return $this->historyRepository->getTicketsByDay($dayID);
    }

    public function getHomeInformation()
    {
        return $this->historyRepository->getHomeInformation();
    }

    public function getLocations(): array
    {
        return $this->historyRepository->getLocations();
    }
}
