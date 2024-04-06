<?php

namespace Model;

use DateTime;
use Illuminate\Support\Facades\Date;

class Ticket
{
    private string $TicketUUID;
    private string $EventName;
    private string $Venue;
    private string $StartDateTime;
    private string $EndDateTime;
    private float $Price;
    private string $CustomerName;
    private bool $IsScanned;
    private ?string $Note;

    public function getNote(): string
    {
        return $this->Note ?? '';
    }

    public function setNote(string $Note): void
    {
        $this->Note = $Note;
    }

    public function getTicketUUID(): string
    {
        return $this->TicketUUID;
    }

    public function setTicketUUID(string $TicketUUID): void
    {
        $this->TicketUUID = $TicketUUID;
    }

    public function getEventName(): string
    {
        return $this->EventName;
    }

    public function setEventName(string $Name): void
    {
        $this->EventName = $Name;
    }

    public function getStartDateTime(): DateTime
    {
        return new DateTime($this->StartDateTime);
    }

    public function getEndDateTime(): DateTime
    {
        return new DateTime($this->EndDateTime);
    }

    public function setStartDateTime(string $startDateTime): void
    {
        $this->StartDateTime = $startDateTime;
    }

    public function setEndDateTime(string $endDateTime): void
    {
        $this->EndDateTime = $endDateTime;
    }

    public function getPrice(): float
    {
        return number_format($this->Price, 2, '.', '');
    }

    public function setPrice(float $Price): void
    {
        $this->Price = $Price;
    }

    public function getCustomerName(): string {
        return $this->CustomerName;
    }

    public function setCustomerName(string $customerName): void
    {
        $this->CustomerName = $customerName;
    }

    public function getIsScanned(): bool
    {
        return $this->IsScanned;
    }

    public function setIsScanned(bool $IsScanned): void
    {
        $this->IsScanned = $IsScanned;
    }

    public function setVenue(string $venue): void
    {
        $this->Venue = $venue;
    }
    public function getVenue(): string
    {
        return $this->Venue;
    }
}