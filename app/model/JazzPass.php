<?php

namespace model;

class JazzPass
{
    private int $JazzPassID;

    private float $Price;

    private string $StartDateTime;

    private string $EndDateTime;

    private string $Note;

    private int $TotalTickets;

    private int $AvailableTickets;

    public function getJazzPassID(): int
    {
        return $this->JazzPassID;
    }

    public function setJazzPassID(int $JazzPassID): void
    {
        $this->JazzPassID = $JazzPassID;
    }

    public function getPrice(): float
    {
        return $this->Price;
    }

    public function setPrice(float $Price): void
    {
        $this->Price = $Price;
    }

    public function getStartDateTime(): string
    {
        return $this->StartDateTime;
    }

    public function setStartDateTime(string $StartDateTime): void
    {
        $this->StartDateTime = $StartDateTime;
    }

    public function getEndDateTime(): string
    {
        return $this->EndDateTime;
    }

    public function setEndDateTime(string $EndDateTime): void
    {
        $this->EndDateTime = $EndDateTime;
    }

    public function getNote(): string
    {
        return $this->Note;
    }

    public function setNote(string $Note): void
    {
        $this->Note = $Note;
    }

    public function getAvailableTickets(): int
    {
        return $this->AvailableTickets;
    }

    public function setAvailableTickets(int $AvailableTickets): void
    {
        $this->AvailableTickets = $AvailableTickets;
    }

    public function getTotalTickets(): int
    {
        return $this->TotalTickets;
    }

    public function setTotalTickets(int $TotalTickets): void
    {
        $this->TotalTickets = $TotalTickets;
    }
}
