<?php

namespace model;

class HistoryTicket
{
    public int $TourI;

    public int $DayID;

    public int $LanguageID;

    public string $Name;

    public string $StartDateTime;

    public string $EndDateTime;

    public int $TotalSeats;

    public int $RemainingSeats;

    public function getDayID(): int
    {
        return $this->DayID;
    }
}
