<?php

namespace repository;

require_once __DIR__.'/../model/HistoryDays.php';
require_once __DIR__.'/../model/HistoryLanguageType.php';
require_once __DIR__.'/../model/HistoryTicket.php';

class HistoryRepository extends BaseRepository
{
    public function getHistoryDays(): array
    {
        $query = $this->connection->prepare('SELECT * FROM HistoryDays');
        $query->execute();

        $historyDays = $query->fetchAll(\PDO::FETCH_CLASS, "\Model\HistoryDays");

        return $historyDays;
    }
}
