<?php

namespace model;

class HistoryDays
{
    public int $DayID;

    public string $Date;

    public function getDayID(): int
    {
        return $this->DayID;
    }
}
