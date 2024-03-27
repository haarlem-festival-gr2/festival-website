<?php

namespace model;

class HistoryLanguageType
{
    public int $LanguageID;
    public string $LanguageType;

    public function getDayID(): int
    {
        return $this->LanguageID;
    }
}