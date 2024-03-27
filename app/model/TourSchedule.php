<?php

class TourSchedule
{
    public $id;

    public string $tour_date;

    public string $time_slot;

    public int $english_tours;

    public int $dutch_tours;

    public int $chinese_tours;

    public function __construct(?int $id, string $tour_date, string $time_slot, int $english_tours, int $dutch_tours, int $chinese_tours)
    {
        $this->id = $id;
        $this->tour_date = $tour_date;
        $this->time_slot = $time_slot;
        $this->english_tours = $english_tours;
        $this->dutch_tours = $dutch_tours;
        $this->chinese_tours = $chinese_tours;
    }

    // Getters
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTourDate(): string
    {
        return $this->tour_date;
    }

    public function getTimeSlot(): string
    {
        return $this->time_slot;
    }

    public function getEnglishTours(): int
    {
        return $this->english_tours;
    }

    public function getDutchTours(): int
    {
        return $this->dutch_tours;
    }

    public function getChineseTours(): int
    {
        return $this->chinese_tours;
    }

    // Setters
    public function setTourDate(string $tour_date): void
    {
        $this->tour_date = $tour_date;
    }

    public function setTimeSlot(string $time_slot): void
    {
        $this->time_slot = $time_slot;
    }

    public function setEnglishTours(int $english_tours): void
    {
        $this->english_tours = $english_tours;
    }

    public function setDutchTours(int $dutch_tours): void
    {
        $this->dutch_tours = $dutch_tours;
    }

    public function setChineseTours(int $chinese_tours): void
    {
        $this->chinese_tours = $chinese_tours;
    }
}