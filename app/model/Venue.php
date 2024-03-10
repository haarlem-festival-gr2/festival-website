<?php

namespace model;

class Venue
{
    private int $VenueID;

    private string $Name;

    private string $Address;

    private ?string $ContactDetails;

    public function getVenueID(): int
    {
        return $this->VenueID;
    }

    public function setVenueID(int $venueID): void
    {
        $this->VenueID = $venueID;
    }

    public function getVenueName(): string
    {
        return $this->Name;
    }

    public function setVenueName(string $name): void
    {
        $this->Name = $name;
    }

    public function getAddress(): string
    {
        return $this->Address;
    }

    public function setAddress(string $address): void
    {
        $this->Address = $address;
    }

    public function getContactDetails(): string
    {
        return $this->ContactDetails;
    }

    public function setContactDetails(string $contactDetails): void
    {
        $this->ContactDetails = $contactDetails;
    }
}
