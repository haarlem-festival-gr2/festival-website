<?php

namespace Model;

class Artist
{
    public function __construct(
        public int $ArtistID,
        public string $Name,
        public string $Bio,
        public string $HeaderImg,
        public string $ArtistImg1,
        public string $ArtistImg2,
        public string $PerformanceImg,
        public array $Songs = [],
        public array $Albums = []
    ) {
    }
}
