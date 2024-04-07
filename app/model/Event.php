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

    public int $Quantity = 1;

    public function getType(): string
    {
        return $this->Type;
    }

    public function getID(): string
    {
        $type = strtolower($this->Type[0]);

        return $type.'-'.$this->ID;
    }

    public function getPrice(): float
    {
        return $this->Price;
    }

    public function getTotalTickets(): int
    {
        if ($this->Name != 'Jazz Day Pass') {
            return floor($this->TotalTickets * 0.9);
        }
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
        $img = $this->Img;


        if ($img[0] !== '/') {
            $img = "/$img";
        }

        return $img;
    }

    public function getStartDateTime(): DateTime
    {
        return new DateTime($this->StartDateTime);
    }

    public function getEndDateTime(): DateTime
    {
        return new DateTime($this->EndDateTime);
    }

    public function getCssClass(): string
    {
        switch (strtolower($this->Type[0])) {
            case 'j':
            case 'd':
                return 'bg-[#B92090]';
            case 'y':
            case 'c':
                return 'bg-[#E49287]';
            case 'h':
            case 'f':
                return 'bg-[#95D4EB]';
        }
    }
}
