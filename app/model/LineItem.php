<?php

namespace Model;

class LineItem
{
    public string $EventName;

    public int $Quantity;

    public float $Price;

    public function getEventName(): string
    {
        return $this->EventName;
    }

    public function setEventName(string $EventName): void
    {
        $this->EventName = $EventName;
    }

    public function getQuantity(): int
    {
        return $this->Quantity;
    }

    public function setQuantity(int $Quantity): void
    {
        $this->Quantity = $Quantity;
    }

    public function getPrice(): string
    {
        return number_format($this->Price, 2);
    }

    public function setPrice(float $Price): void
    {
        $this->Price = $Price;
    }
}
