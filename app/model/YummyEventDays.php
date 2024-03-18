<?php

namespace model;

class YummyEventDays
{
    public int $DayID;
    public string $Date;

    public function getDayID(): int
    {
        return $this->DayID;
    }
}
