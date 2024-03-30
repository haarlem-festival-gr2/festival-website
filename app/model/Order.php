<?php

namespace model;

use DateTime;

class Order
{
    private string $OrderUUID;
    private int $UserID;
    private string $SessionID;
    private string $Status;
    private float $TotalPrice;
    private array $Tickets = [];
    private string $DateTime;

    public function getDatetime(): string {
        return $this->DateTime;
    }

    public function setDatetime(string $Datetime): void {
        $this->DateTime = $Datetime;
    }

    public function getOrderUUID(): string
    {
        return $this->OrderUUID;
    }

    public function setOrderUUID(string $OrderUUID): void
    {
        $this->OrderUUID = $OrderUUID;
    }

    public function getUserID(): int
    {
        return $this->UserID;
    }

    public function setUserID(int $UserID): void
    {
        $this->UserID = $UserID;
    }

    public function getSessionID(): string
    {
        return $this->SessionID;
    }

    public function setSessionID(string $SessionID): void
    {
        $this->SessionID = $SessionID;
    }

    public function getStatus(): string
    {
        return $this->Status;
    }

    public function setStatus(string $Status): void
    {
        $this->Status = $Status;
    }

    public function getTotalPrice(): float
    {
        return number_format($this->TotalPrice, 2);
    }

    public function setTotalPrice(float $TotalPrice): void
    {
        $this->TotalPrice = $TotalPrice;
    }

    public function getTickets(): array
    {
        return $this->Tickets;
    }

    public function setTickets(array $Tickets): void
    {
        $this->Tickets = $Tickets;
    }

    const ORDER_STATUS_PAID = 'paid';
    const ORDER_STATUS_UNPAID = 'unpaid';
}


