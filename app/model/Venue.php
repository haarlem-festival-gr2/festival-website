<?php

namespace model;

class Venue
{
    public function __construct(
        public int $VenueID,
        public string $Name,
        public string $Address,
        public ?string $ContactDetails
    ) {}
}
