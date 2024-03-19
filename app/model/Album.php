<?php

namespace Model;

class Album
{
    public function __construct(
        public int $AlbumID,
        //public int $ArtistID,
        public string $SpotifyID
    ) {}
}
