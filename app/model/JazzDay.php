<?php

namespace Model;

class JazzDay
{
    public function __construct(
        public int $DayID,
        public string $Date,
        public string $ImgPath,
        public ?string $Note,
        public Venue $Venue
    ) {
        $this->Note = $this->Note ?? '';
    }
}
