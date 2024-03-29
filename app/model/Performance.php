<?php

namespace model;

class Performance
{
    public function __construct(
        public int $PerformanceID,
        public Artist $Artist,
        public JazzDay $Day,
        public float $Price,
        public string $StartDateTime,
        public string $EndDateTime,
        public int $AvailableTickets,
        public int $TotalTickets,
        public ?string $Details
    ) {
        $this->Details = $this->Details ?? '';
    }
}
