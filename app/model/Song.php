<?php

namespace model;

class Song
{
    public function __construct(
        public int $SongID,
        //public int $ArtistID,
        public string $SpotifyID
    ) {}
}
