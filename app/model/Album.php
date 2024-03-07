<?php

namespace model;

class Album {
    private int $AlbumID;
    private int $ArtistID;
    private string $SpotifyID;

    public function getAlbumID(): int {
        return $this->AlbumID;
    }

    public function setAlbumID(int $albumID): void {
        $this->AlbumID = $albumID;
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