<?php

namespace model;

class Session
{
    public int $SessionID;

    public int $RestaurantID;

    public int $DayID;

    public string $Name;

    public string $Description;

    public string $StartDateTime;

    public string $EndDateTime;

    public int $TotalSeats;

    public int $RemainingSeats;

    public function getDayID(): int
    {
        return $this->DayID;
    }
}
