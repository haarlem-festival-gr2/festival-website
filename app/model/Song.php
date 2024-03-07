<?php

namespace model;

class Song {
    private int $SongID;
    private int $ArtistID;
    private string $SpotifyID;

    public function getSongID(): int {
        return $this->SongID;
    }

    public function setSongID(int $songID): void {
        $this->SongID = $songID;
    }

    public function getArtistID(): int {
        return $this->ArtistID;
    }

    public function setArtistID(int $artistID): void {
        $this->ArtistID = $artistID;
    }

    public function getSpotifyID(): string {
        return $this->SpotifyID;
    }

    public function setSpotifyID(string $spotifyID): void {
        $this->SpotifyID = $spotifyID;
    }
}
