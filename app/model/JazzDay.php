<?php

namespace model;

class JazzDay {
    private int $DayID;
    private int $DayNumber;
    private string $Date;
    private string $ImgPath;
    private int $VenueID;
    private ?string $Note;

    public function getDayID(): int {
        return $this->DayID;
    }

    public function setDayID(int $dayID): void {
        $this->DayID = $dayID;
    }

    public function getDayNumber(): int {
        return $this->DayNumber;
    }

    public function setDayNumber(int $dayNumber): void {
        $this->DayNumber = $dayNumber;
    }

    public function getDate(): string {
        return $this->Date;
    }

    public function setDate(string $date): void {
        $this->Date = $date;
    }

    public function getImgPath(): string {
        return $this->ImgPath;
    }

    public function setImgPath(string $imgPath): void {
        $this->ImgPath = $imgPath;
    }

    public function getVenueID(): int {
        return $this->VenueID;
    }

    public function setVenueID(int $venueID): void {
        $this->VenueID = $venueID;
    }

    public function getNote(): string {
        return $this->Note;
    }

    public function setNote(string $note): void {
        $this->Note = $note;
    }
}
