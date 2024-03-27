<?php

namespace Model;

class JazzPass
{
    public function __construct(
        public int $JazzPassID,
        public float $Price,
        public string $StartDateTime,
        public string $EndDateTime,
        public ?string $Note,
        public int $TotalTickets,
        public int $AvailableTickets
    ) {
        $this->Note = $this->Note ?? '';
    }
}
