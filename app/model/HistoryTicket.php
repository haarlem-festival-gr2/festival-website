<?php

namespace Model;

class HistoryTicket
{
    public int $TourID;

    public int $DayID;

    public int $LanguageID;

    public string $Name;

    public string $StartDateTime;

    public string $EndDateTime;

    public int $TotalTickets;

    public int $RemainingTickets;

    // public function getDayID(): int
    // {
    //     return $this->DayID;
    // }
    const FAMILY_TICKET_SIZE = 4;
}
