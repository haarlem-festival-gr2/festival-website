<?php

namespace Repository;

use Model\DetailPage;
use Model\HistoryHome;
use Model\HistoryTicket;
use PDO;

require_once __DIR__.'/BaseRepository.php';
require_once __DIR__.'/../model/HistoryDays.php';
require_once __DIR__.'/../model/HistoryLanguageType.php';
require_once __DIR__.'/../model/HistoryTicket.php';
require_once __DIR__.'/../model/HistoryHome.php';
require_once __DIR__.'/../model/DetailPage.php';
require_once __DIR__.'/../model/Locations.php';
require_once __DIR__.'/../model/Stories.php';

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

    // public function getTicketsByDay(int $dayID): array
    // {
    //     $query = $this->connection->prepare('SELECT * FROM HistoryTicket WHERE DayID = :dayID');
    //     $query->bindValue(':dayID', $dayID, PDO::PARAM_INT);
    //     $query->execute();
    //     return $query->fetchAll(PDO::FETCH_CLASS, "\Model\HistoryTicket");

    // }
    public function getTicketsByDay(int $dayID): array
    {
        $query = $this->connection->prepare('SELECT * FROM HistoryTicket WHERE DayID = :dayID');
        $query->bindValue(':dayID', $dayID, PDO::PARAM_INT);
        $query->execute();

        $tickets = $query->fetchAll(PDO::FETCH_CLASS, "\Model\HistoryTicket");

        return $tickets ? $tickets : [];
    }

    public function getHomeInformation(): ?HistoryHome
    {
        $query = $this->connection->prepare('SELECT * FROM HistoryHome LIMIT 1');
        $query->execute();

        $query->setFetchMode(\PDO::FETCH_CLASS, "Model\HistoryHome");

        return $query->fetch();
    }

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

    public function getDetailPageById($id): ?DetailPage
    {
        $query = $this->connection->prepare('SELECT * FROM DetailPage WHERE DetailPageID = :id');
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->execute();

        $query->setFetchMode(PDO::FETCH_CLASS, "Model\DetailPage");

        return $query->fetch();
    }

    public function getStoriesByDetailPageId($detailPageId): array
    {
        $query = $this->connection->prepare('SELECT * FROM Stories WHERE DetailPageID = :id');
        $query->bindValue(':id', $detailPageId, PDO::PARAM_INT);
        $query->execute();

        return $query->fetchAll(PDO::FETCH_CLASS, "Model\Stories");
    }

    public function getAllDetailPages(): array
    {
        $query = $this->connection->prepare('SELECT * FROM DetailPage');
        $query->execute();

        return $query->fetchAll(PDO::FETCH_CLASS, "Model\DetailPage");
    }

    public function getNameFromId(int $id): string
    {
        $query = $this->connection->prepare('SELECT Name FROM Locations as l 
            JOIN DetailPage as d ON l.DetailPageID = d.DetailPageID WHERE l.DetailPageId = ?');

        $query->execute([$id]);

        $query->setFetchMode(PDO::FETCH_ASSOC);

        return $query->fetch()['Name'];
    }

    public function updateTicket(HistoryTicket $ticket): bool
    {
        $query = $this->connection->prepare('UPDATE HistoryTicket SET Name = :name, LanguageID = :languageID, DayID = :dayID, StartDateTime = :startDateTime, EndDateTime = :endDateTime, TotalTickets = :totalTickets, RemainingTickets = :remainingTickets WHERE TourID = :tourID');
        $query->bindValue(':name', $ticket->Name, PDO::PARAM_STR);
        $query->bindValue(':languageID', $ticket->LanguageID, PDO::PARAM_INT);
        $query->bindValue(':dayID', $ticket->DayID, PDO::PARAM_INT);
        $query->bindValue(':startDateTime', $ticket->StartDateTime, PDO::PARAM_STR);
        $query->bindValue(':endDateTime', $ticket->EndDateTime, PDO::PARAM_STR);
        $query->bindValue(':totalTickets', $ticket->TotalTickets, PDO::PARAM_INT);
        $query->bindValue(':remainingTickets', $ticket->RemainingTickets, PDO::PARAM_INT);
        $query->bindValue(':tourID', $ticket->TourID, PDO::PARAM_INT);

        return $query->execute();
    }

    public function getTicketById(int $ticketId): ?HistoryTicket
    {
        $query = $this->connection->prepare('SELECT * FROM HistoryTicket WHERE TourID = :ticketId');
        $query->bindValue(':ticketId', $ticketId, PDO::PARAM_INT);
        $query->execute();

        $query->setFetchMode(PDO::FETCH_CLASS, "\Model\HistoryTicket");

        return $query->fetch();
    }

    public function addTicket(HistoryTicket $ticket): bool
    {
        $query = $this->connection->prepare('INSERT INTO HistoryTicket (Name, TourID, DayID, LanguageID, StartDateTime, EndDateTime, TotalTickets, RemainingTickets) VALUES (:name, :tourID, :dayID, :languageID, :startDateTime, :endDateTime, :totalTickets, :remainingTickets)');
        $query->bindValue(':name', $ticket->Name, PDO::PARAM_STR);
        $query->bindValue(':tourID', $ticket->TourID, PDO::PARAM_INT);
        $query->bindValue(':dayID', $ticket->DayID, PDO::PARAM_INT);
        $query->bindValue(':languageID', $ticket->LanguageID, PDO::PARAM_INT);
        $query->bindValue(':startDateTime', $ticket->StartDateTime, PDO::PARAM_STR);
        $query->bindValue(':endDateTime', $ticket->EndDateTime, PDO::PARAM_STR);
        $query->bindValue(':totalTickets', $ticket->TotalTickets, PDO::PARAM_INT);
        $query->bindValue(':remainingTickets', $ticket->RemainingTickets, PDO::PARAM_INT);

        return $query->execute();
    }

    public function deleteTicket(int $ticketId): bool
    {
        $query = $this->connection->prepare('DELETE FROM HistoryTicket WHERE TourID = :ticketId');
        $query->bindValue(':ticketId', $ticketId, PDO::PARAM_INT);

        return $query->execute();
    }
}
