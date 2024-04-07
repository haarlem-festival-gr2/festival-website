<?php

namespace Service;

use Model\HistoryTicket;
use Repository\HistoryRepository;

require_once __DIR__ . '/../repository/HistoryRepository.php';

require_once __DIR__ . '/../model/HistoryTicket.php';

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

    public function getDayNames(): array
    {
        return $this->historyRepository->getDayNames();
    }

    public function getDetailPageById($id)
    {
        return $this->historyRepository->getDetailPageById($id);
    }

    public function getNameFromId(int $id): string
    {
        return $this->historyRepository->getNameFromId($id);
    }

    public function getStoriesByDetailPageId($detailPageId)
    {
        return $this->historyRepository->getStoriesByDetailPageId($detailPageId);
    }
    // Add method to get all detail pages
    public function getAllDetailPages(): array
    {
        return $this->historyRepository->getAllDetailPages();
    }

    // public function updateTicket(HistoryTicket $ticket): bool
    // {
    //     return $this->historyRepository->updateTicket($ticket);
    // }

    // public function updateTicket(int $tourID, string $name, int $languageID, string $startDateTime, string $endDateTime, int $totalTickets, int $remainingTickets): bool
    // {
    //     $ticket = new HistoryTicket();
    //     $ticket->TourID = $tourID;
    //     $ticket->Name = $name;
    //     $ticket->LanguageID = $languageID;
    //     $ticket->StartDateTime = $startDateTime;
    //     $ticket->EndDateTime = $endDateTime;
    //     $ticket->TotalTickets = $totalTickets;
    //     $ticket->RemainingTickets = $remainingTickets;

    //     return $this->historyRepository->updateTicket($ticket);
    // }

    // public function updateTicket(HistoryTicket $ticket): bool
    // {
    //     return $this->historyRepository->updateTicket($ticket);
    // }
    public function updateTicket(HistoryTicket $ticket): bool
    {
        return $this->historyRepository->updateTicket($ticket);
    }

    public function getTicketById(int $ticketId): ?HistoryTicket
    {
        return $this->historyRepository->getTicketById($ticketId);
    }



    // public function addTicket(string $name, int $tourID, int $dayID, int $languageID, string $startDateTime, string $endDateTime, int $totalTickets): bool
    // {
    //     $ticket = new HistoryTicket();
    //     $ticket->Name = $name;
    //     $ticket->TourID = $tourID;
    //     $ticket->DayID = $dayID;
    //     $ticket->LanguageID = $languageID;
    //     $ticket->StartDateTime = $startDateTime;
    //     $ticket->EndDateTime = $endDateTime;
    //     $ticket->TotalTickets = $totalTickets;

    //     return $this->historyRepository->addTicket($ticket);
    // }

    public function addTicket(string $name, int $tourID, int $dayID, int $languageID, string $startDateTime, string $endDateTime, int $totalTickets, int $remainingTickets): bool
    {
        $ticket = new HistoryTicket();
        $ticket->Name = $name;
        $ticket->TourID = $tourID;
        $ticket->DayID = $dayID;
        $ticket->LanguageID = $languageID;
        $ticket->StartDateTime = $startDateTime;
        $ticket->EndDateTime = $endDateTime;
        $ticket->TotalTickets = $totalTickets;

        $ticket->RemainingTickets = $remainingTickets;

        return $this->historyRepository->addTicket($ticket);
    }

    // public function deleteTicket(int $ticketId): bool
    // {
    //     return $this->historyRepository->deleteTicket($ticketId);
    // }

    public function deleteTicket(int $ticketId): bool
    {
        return $this->historyRepository->deleteTicket($ticketId);
    }

}
