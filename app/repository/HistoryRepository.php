<?php

namespace Repository;

use Model\HistoryDays;
use Model\HistoryLanguageType;
use Model\HistoryTicket;
use Model\HistoryHome;
use Model\DetailPage;
use Model\Locations;
use Model\Stories;


use PDO;

require_once __DIR__ . '/BaseRepository.php';
require_once __DIR__ . '/../model/HistoryDays.php';
require_once __DIR__ . '/../model/HistoryLanguageType.php';
require_once __DIR__ . '/../model/HistoryTicket.php';
require_once __DIR__ . '/../model/HistoryHome.php';
require_once __DIR__ . '/../model/DetailPage.php';
require_once __DIR__ . '/../model/Locations.php';
require_once __DIR__ . '/../model/Stories.php';




class HistoryRepository extends BaseRepository
{
    public function getHistoryDays(): array
    {
        $query = $this->connection->prepare('SELECT * FROM HistoryDays');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS, "\Model\HistoryDays");
    }

    public function getHistoryLanguages(): array
    {
        $query = $this->connection->prepare('SELECT * FROM HistoryLanguageType');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS, "\Model\HistoryLanguageType");
    }

    public function getTicketsByDay(int $dayID): array
    {
        $query = $this->connection->prepare('SELECT * FROM HistoryTicket WHERE DayID = :dayID');
        $query->bindValue(':dayID', $dayID, PDO::PARAM_INT);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS, "\Model\HistoryTicket");

    }

    // // public function getTicketsByDay(int $dayID): array
    // // {
    // //     $query = $this->connection->prepare('SELECT * FROM HistoryTicket WHERE DayID = :dayID');
    // //     $query->bindValue(':dayID', $dayID, \PDO::PARAM_INT);
    // //     $query->execute();
    // //     return $query->fetchAll(\PDO::FETCH_CLASS, "\Model\HistoryTicket");
    // // }

    // public function getTicketsByDay(int $dayID): array
    // {
    //     $query = $this->connection->prepare('SELECT * FROM HistoryTicket WHERE DayID = :dayID');
    //     $query->execute([':dayID' => $dayID]);

    //     $query->setFetchMode(\PDO::FETCH_CLASS, "\Model\HistoryTicket");

    //     return $query->fetch();
    // }



    public function getHomeInformation(): ?HistoryHome
    {
        $query = $this->connection->prepare('SELECT * FROM HistoryHome LIMIT 1');
        $query->execute();

        $query->setFetchMode(\PDO::FETCH_CLASS, "Model\HistoryHome");
        return $query->fetch();
    }

    // public function getLocations(): array
    // {

    //     $query = $this->connection->prepare('SELECT * FROM Locations');
    //     $query->execute();

    //     $query->setFetchMode(\PDO::FETCH_CLASS, "Model\Locations");
    //     return $query->fetch();


    // }

    public function getLocations(): array
    {
        $query = $this->connection->prepare('SELECT * FROM Locations');
        $query->execute();

        $query->setFetchMode(\PDO::FETCH_CLASS, "model\Location");
        return $query->fetchAll();
    }

    public function getDayNames(): array
    {
        $query = $this->connection->prepare('SELECT DayOfTheWeek FROM HistoryDays');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_COLUMN);
    }

}