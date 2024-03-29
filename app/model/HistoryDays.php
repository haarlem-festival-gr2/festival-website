<?php

namespace model;

class HistoryDays
{
    public int $DayID;

    public string $Date;
    public $DayOfTheWeek;

    public function getDayID(): int
    {
        return $this->DayID;
    }
}
