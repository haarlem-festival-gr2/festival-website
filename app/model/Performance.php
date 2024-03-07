<?php

namespace model;

class Performance {
    private int $PerformanceID;
    //private int $ArtistID;

    private Artist $Artist;
    private float $Price;
    private string $StartDateTime;
    private string $EndDateTime;
    private int $AvailableTickets;
    private int $DayID;
    private int $VenueID;
    private ?string $Hall;



    public function getPerformanceID(): int {
        return $this->PerformanceID;
    }

    public function setPerformanceID(int $performanceID): void {
        $this->PerformanceID = $performanceID;
    }

    public function getArtistID(): int {
        return $this->ArtistID;
    }

    public function setArtistID(int $artistID): void {
        $this->ArtistID = $artistID;
    }

    public function getPrice(): float {
        return $this->Price;
    }

    public function setPrice(float $price): void {
        $this->Price = $price;
    }

    public function getStartDateTime(): string {
        return $this->StartDateTime;
    }

    public function setStartDateTime(string $startDateTime): void {
        $this->StartDateTime = $startDateTime;
    }

    public function getEndDateTime(): string {
        return $this->EndDateTime;
    }

    public function setEndDateTime(string $endDateTime): void {
        $this->EndDateTime = $endDateTime;
    }

    public function getAvailableTickets(): int {
        return $this->AvailableTickets;
    }

    public function setAvailableTickets(int $availableTickets): void {
        $this->AvailableTickets = $availableTickets;
    }

    public function getDayID(): int {
        return $this->DayID;
    }

    public function setDayID(int $dayID): void {
        $this->DayID = $dayID;
    }

    public function getVenueID(): int {
        return $this->VenueID;
    }

    public function setVenueID(int $venueID): void {
        $this->VenueID = $venueID;
    }

    public function getHall(): string {
        return $this->Hall;
    }

    public function setHall(string $hall): void {
        $this->Hall = $hall;
    }

    public function setArtist(Artist $artist): void
    {
        $this->Artist = $artist;
    }
    public function getArtist(): Artist
    {
        return $this->Artist;
    }
}