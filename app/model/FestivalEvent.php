<?php

namespace model;

class FestivalEvent
{
    private int $FestivalEventID;

    private string $Name;

    private string $Description;

    private string $ImgPath;

    private string $StartDate;

    private string $EndDate;

    public function getFestivalEventID(): int
    {
        return $this->FestivalEventID;
    }

    public function setFestivalEventID(int $festivalEventID): void
    {
        $this->FestivalEventID = $festivalEventID;
    }

    public function getFestivalEventName(): string
    {
        return $this->Name;
    }

    public function setFestivalEventName(string $name): void
    {
        $this->Name = $name;
    }

    public function getDescription(): string
    {
        return $this->Description;
    }

    public function setDescription(string $description): void
    {
        $this->Description = $description;
    }

    public function getImgPath(): string
    {
        return $this->ImgPath;
    }

    public function setImgPath(string $imgPath): void
    {
        $this->ImgPath = $imgPath;
    }

    public function getStartDate(): string
    {
        return $this->StartDate;
    }

    public function setStartDate(string $startDate): void
    {
        $this->StartDate = $startDate;
    }

    public function getEndDate(): string
    {
        return $this->EndDate;
    }

    public function setEndDate(string $endDate): void
    {
        $this->EndDate = $endDate;
    }
}
