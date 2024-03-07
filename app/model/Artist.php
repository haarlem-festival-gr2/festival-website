<?php

namespace model;

class Artist
{
    private int $ArtistID;

    private string $Name;

    private ?string $Bio;

    private ?string $HeaderImg;

    private ?string $ArtistImg1;

    private ?string $ArtistImg2;

    private string $PerformanceImg;

    public function getArtistID(): int
    {
        return $this->ArtistID;
    }

    public function setArtistID(int $artistID): void
    {
        $this->ArtistID = $artistID;
    }

    public function getArtistName(): string
    {
        return $this->Name;
    }

    public function setArtistName(string $name): void
    {
        $this->Name = $name;
    }

    public function getBio(): string
    {
        return $this->Bio;
    }

    public function setBio(string $bio): void
    {
        $this->Bio = $bio;
    }

    public function getHeaderImg(): string
    {
        return $this->HeaderImg;
    }

    public function setHeaderImg(string $headerImg): void
    {
        $this->HeaderImg = $headerImg;
    }

    public function getArtistImg1(): string
    {
        return $this->ArtistImg1;
    }

    public function setArtistImg1(string $artistImg1): void
    {
        $this->ArtistImg1 = $artistImg1;
    }

    public function getArtistImg2(): string
    {
        return $this->ArtistImg2;
    }

    public function setArtistImg2(string $artistImg2): void
    {
        $this->ArtistImg2 = $artistImg2;
    }

    public function getPerformanceImg(): string
    {
        return $this->PerformanceImg;
    }

    public function setPerformanceImg(string $performanceImg): void
    {
        $this->PerformanceImg = $performanceImg;
    }
}
