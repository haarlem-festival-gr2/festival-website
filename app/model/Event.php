<?php

namespace Model;

use DateTime;

class Event
{
    private string $Type;
    private int $ID;
    private float $Price;
    private int $TotalTickets;
    private string $Name;
    private string $Venue;
    private string $Img;
    private string $StartDateTime;
    private string $EndDateTime;

    public function getType(): string
    {
        return $this->Type;
    }

    public function getID(): int
    {
        return $this->ID;
    }

    public function getPrice(): float
    {
        return $this->Price;
    }

    public function getTotalTickets(): int
    {
        return $this->TotalTickets;
    }

    public function getName(): string
    {
        return $this->Name;
    }

    public function getVenue(): string
    {
        return $this->Venue;
    }

    public function getImg(): string
    {
        return $this->Img;
    }

    public function getStartDateTime(): DateTime
    {
        return new DateTime($this->StartDateTime);
    }

    public function getEndDateTime(): DateTime
    {
        return new DateTime($this->EndDateTime);
    }
}
