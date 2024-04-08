<?php

namespace model;

use DateTime;

class OrderItem
{
    private int $ItemID;

    private string $EventName;

    private string $Venue;

    private string $StartDateTime;

    private string $EndDateTime;

    private float $Price;

    private int $Quantity;

    private string $CustomerName;

    private string $EventID;

    private string $Type;

    private ?string $Note;

    public function getType(): string
    {
        return $this->Type;
    }

    public function setType(string $Type): void
    {
        $this->Type = $Type;
    }

    public function getNote(): string
    {
        return $this->Note ?? '';
    }

    public function setNote(string $Note): void
    {
        $this->Note = $Note;
    }

    public function getEventID(): string
    {
        return $this->EventID;
    }

    public function setEventID(string $EventID): void
    {
        $this->EventID = $EventID;
    }

    public function getOrderItemID(): int
    {
        return $this->ItemID;
    }

    public function setOrderItemID(int $OrderItemID): void
    {
        $this->ItemID = $OrderItemID;
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

    public function setStartDateTime($startDateTime): void
    {
        if (! is_string($startDateTime)) {
            $startDateTime = $startDateTime->format('Y-m-d H:i:s');
        }
        $this->StartDateTime = $startDateTime;
    }

    public function setEndDateTime($endDateTime): void
    {
        if (! is_string($endDateTime)) {
            $endDateTime = $endDateTime->format('Y-m-d H:i:s');
        }
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

    public function getQuantity(): int
    {
        return $this->Quantity;
    }

    public function getEventIDInt(): int
    {
        return (int) preg_replace('/\D/', '', $this->EventID);
    }

    public function setQuantity(int $Quantity): void
    {
        $this->Quantity = $Quantity;
    }

    public function getCustomerName(): string
    {
        return $this->CustomerName;
    }

    public function setCustomerName(string $customerName): void
    {
        $this->CustomerName = $customerName;
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
