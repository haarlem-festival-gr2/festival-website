<?php

namespace model;

use DateTime;

class Ticket
{
    private string $TicketUUID;
    private string $EventName;
    private string $Venue;
    private string $StartDateTime;
    private string $EndDateTime;
    private float $Price;
    private int $Quantity;
    private string $CustomerName;
    private bool $IsScanned;

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


    public function setStartDateTime($startDateTime): void {
        if (!is_string($startDateTime)) {
            $startDateTime = $startDateTime->format('Y-m-d H:i:s');
        }
        $this->StartDateTime = $startDateTime;
    }

    public function setEndDateTime($endDateTime): void {
        if (!is_string($endDateTime))
            $endDateTime = $endDateTime->format('Y-m-d H:i:s');
        $this->EndDateTime = $endDateTime;
    }

    public function getPrice(): float
    {
        return number_format($this->Price, 2);
    }

    public function setPrice(float $Price): void
    {
        $this->Price = $Price;
    }

    public function getQuantity(): int
    {
        return $this->Quantity;
    }

    public function setQuantity(int $Quantity): void
    {
        $this->Quantity = $Quantity;
    }

    public function getCustomerName(): string {
        return $this->CustomerName;
    }

    public function setCustomerName(string $customerName): void {
        $this->CustomerName = $customerName;
    }

    public function getIsScanned(): bool {
        return $this->IsScanned;
    }

    public function setIsScanned(bool $IsScanned): void {
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