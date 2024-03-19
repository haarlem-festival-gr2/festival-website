<?php

namespace repository;

use Model\Album;
use Model\Artist;
use model\JazzDay;
use Model\JazzPass;
use Model\Performance;
use model\Song;
use model\Venue;

require_once __DIR__.'/../model/Artist.php';
require_once __DIR__.'/../model/JazzDay.php';
require_once __DIR__.'/../model/Performance.php';
require_once __DIR__.'/../model/Venue.php';
require_once __DIR__.'/../model/Album.php';
require_once __DIR__.'/../model/Song.php';
require_once __DIR__.'/../model/JazzPass.php';
require_once __DIR__.'/../repository/BaseRepository.php';


class JazzRepository extends BaseRepository
{
    public function getArtistById(int $id): ?Artist
    {
        $query = $this->connection->prepare('SELECT ArtistID, Name, Bio, HeaderImg, ArtistImg1, ArtistImg2, PerformanceImg FROM Artist WHERE ArtistID = ?');
        $query->execute([$id]);

        $artistData = $query->fetch(\PDO::FETCH_ASSOC);

        if (!$artistData) {
            return null;
        }

        return new Artist(
            $artistData['ArtistID'],
            $artistData['Name'],
            $artistData['Bio'],
            $artistData['HeaderImg'],
            $artistData['ArtistImg1'],
            $artistData['ArtistImg2'],
            $artistData['PerformanceImg']
        );
    }

    public function getArtistWithDetailsById(int $id): ?Artist
    {
        $query = $this->connection->prepare('SELECT ArtistID, Name, Bio, HeaderImg, ArtistImg1, ArtistImg2, PerformanceImg FROM Artist WHERE ArtistID = ?');
        $query->execute([$id]);

        $artistData = $query->fetch(\PDO::FETCH_ASSOC);

        if (!$artistData) {
            return null;
        }

        $artist = new Artist(
            $artistData['ArtistID'],
            $artistData['Name'],
            $artistData['Bio'],
            $artistData['HeaderImg'],
            $artistData['ArtistImg1'],
            $artistData['ArtistImg2'],
            $artistData['PerformanceImg']
        );

        $artist->Songs = $this->getSongsByArtistId($artist->ArtistID);
        $artist->Albums = $this->getAlbumsByArtistId($artist->ArtistID);

        return $artist;
    }

    public function getAllArtistsWithDetails(): array {
        $artists = $this->getAllArtists();
        foreach($artists as $artist){
            $artist->Songs = $this->getSongsByArtistId($artist->ArtistID);
            $artist->Albums = $this->getAlbumsByArtistId($artist->ArtistID);
        }
        return $artists;
    }

    public function updateVenue(int $venueId, string $name, string $address, string $contactDetails) : bool
    {
        $query = $this->connection->prepare('UPDATE Venue SET Name = :name, Address = :address, ContactDetails = :contact WHERE VenueID = :venueId');
        return $query->execute([
            ':name' => $name,
            ':address' => $address,
            ':contact' => $contactDetails,
            ':venueId' => $venueId
        ]);
    }

    public function createVenue(string $name, string $address, string $contactDetails): bool
    {
        $query = $this->connection->prepare('INSERT INTO Venue (Name, Address, ContactDetails) VALUES (?, ?, ?)');
        return $query->execute([$name, $address, $contactDetails]);
    }

    public function deleteVenue(int $venueId): bool
    {
        try {
            $query = $this->connection->prepare('DELETE FROM Venue WHERE VenueID = ?');
            return $query->execute([$venueId]);
        } catch (PDOException $e) {
            // Handle any exceptions here
            echo "Error deleting venue: " . $e->getMessage();
            return false;
        }
    }

    public function updateJazzDay(int $dayId, string $date, int $venueId, string $note, string $imgPath): bool
    {
        $query = $this->connection->prepare('UPDATE JazzDay SET Date = ?, VenueID = ?, Note = ?, ImgPath = ? WHERE DayID = ?');
        return $query->execute([$date, $venueId, $note, $imgPath, $dayId]);
    }

    public function createJazzDay(string $date, int $venueId, string $note, string $imgPath): bool
    {
        $query = $this->connection->prepare('INSERT INTO JazzDay (Date, VenueID, Note, ImgPath) VALUES (?, ?, ?, ?)');
        return $query->execute([$date, $venueId, $note, $imgPath]);
    }

    public function deleteJazzDay(int $jazzDayId): bool
    {
        try {
        $query = $this->connection->prepare('DELETE FROM JazzDay WHERE DayID = ?');
        return $query->execute([$jazzDayId]);
        } catch (PDOException $e) {
        // Handle any exceptions here
        echo "Error deleting jazz day: " . $e->getMessage();
        return false;
        }
    }

    private function attachSongsToArtists(array &$artists): void {
        $query = $this->connection->prepare("SELECT SongID, ArtistID, SpotifyID FROM Song");
        $query->execute();
        $songs = $query->fetchAll(\PDO::FETCH_ASSOC);

        foreach ($songs as $song) {
            if (isset($artists[$song['ArtistID']])) {
                $artists[$song['ArtistID']]->Songs[] = new Song($song['SongID'], $song['SpotifyID']);
            }
        }
    }
    private function attachAlbumsToArtists(array &$artists): void {
        $query = $this->connection->prepare("SELECT AlbumID, ArtistID, SpotifyID FROM Album");
        $query->execute();
        $albums = $query->fetchAll(\PDO::FETCH_ASSOC);

        foreach ($albums as $album) {
            if (isset($artists[$album['ArtistID']])) {
                $artists[$album['ArtistID']]->Albums[] = new Album($album['AlbumID'], $album['SpotifyID']);
            }
        }
    }
    public function getAllArtists(): array
    {
        $query = $this->connection->prepare('SELECT ArtistID, Name, Bio, HeaderImg, ArtistImg1, ArtistImg2, PerformanceImg FROM Artist');
        $query->execute();

        $artists = [];

        while ($artistData = $query->fetch(\PDO::FETCH_ASSOC)) {
            $artist = new Artist(
                $artistData['ArtistID'],
                $artistData['Name'],
                $artistData['Bio'],
                $artistData['HeaderImg'],
                $artistData['ArtistImg1'],
                $artistData['ArtistImg2'],
                $artistData['PerformanceImg']
            );
            $artists[] = $artist;
        }
        return $artists;
    }

    public function getVenueById(int $id): ?Venue
    {
        $query = $this->connection->prepare('SELECT VenueID, Name, Address, ContactDetails FROM Venue WHERE venueID = ?');
        $query->execute([$id]);

        $venueData = $query->fetch(\PDO::FETCH_ASSOC);

        if (!$venueData) {
            return null;
        }

        return new Venue(
            $venueData['VenueID'],
            $venueData['Name'],
            $venueData['Address'],
            $venueData['ContactDetails']
        );
    }

    public function getAllVenues(): array
    {
        $query = $this->connection->prepare('SELECT VenueID, Name, Address, ContactDetails FROM Venue');
        $query->execute();

        $venuesData = $query->fetchAll(\PDO::FETCH_ASSOC);

        $venues = [];

        foreach($venuesData as $venueData){
            $venue = new Venue(
                $venueData['VenueID'],
                $venueData['Name'],
                $venueData['Address'],
                $venueData['ContactDetails']
            );
            $venues[] = $venue;
        }
        return $venues;
    }

    public function getJazzDayById(int $id): ?JazzDay
    {
        $query = $this->connection->prepare('SELECT j.DayID, j.Date, j.ImgPath, j.VenueID, j.Note, v.VenueID as venue_id, v.Name, v.Address, v.ContactDetails FROM JazzDay j 
                                                    JOIN Venue v ON j.VenueID = v.VenueID WHERE j.DayID = ?');
        $query->execute([$id]);

        $jazzDayData = $query->fetch(\PDO::FETCH_ASSOC);

        if (!$jazzDayData) {
            return null;
        }

        return new JazzDay(
            $jazzDayData['DayID'],
            $jazzDayData['Date'],
            $jazzDayData['ImgPath'],
            $jazzDayData['Note'],
            new Venue(
                $jazzDayData['venue_id'],
                $jazzDayData['Name'],
                $jazzDayData['Address'],
                $jazzDayData['ContactDetails']
        ));
    }

    public function getImgPath(int $id): ?string
    {
        $query = $this->connection->prepare('SELECT ImgPath FROM JazzDay WHERE DayID = ?');
        $query->execute([$id]);

        return $query->fetch(\PDO::FETCH_ASSOC)['ImgPath'];
    }


        public function getAllJazzDays(): array
    {
        $query = $this->connection->prepare('
        SELECT j.DayID, j.Date, j.ImgPath, j.VenueID, j.Note,
               v.VenueID as venue_id, v.Name as venue_name, v.Address as venue_address, v.ContactDetails as venue_contact_details
        FROM JazzDay j
        JOIN Venue v ON j.VenueID = v.VenueID
       ORDER BY j.Date ASC
    ');
        $query->execute();

        $jazzDaysData = $query->fetchAll(\PDO::FETCH_ASSOC);
        $jazzDays = [];

        foreach ($jazzDaysData as $jazzDayData) {
            $venue = new Venue(
                $jazzDayData['venue_id'],
                $jazzDayData['venue_name'],
                $jazzDayData['venue_address'],
                $jazzDayData['venue_contact_details']
            );

            $jazzDay = new JazzDay(
                $jazzDayData['DayID'],
                $jazzDayData['Date'],
                $jazzDayData['ImgPath'],
                $jazzDayData['Note'],
                $venue
            );

            $jazzDays[] = $jazzDay;
        }

        return $jazzDays;
    }

    public function getPerformancesByArtist(Artist $artist): array
    {
        // change
        $query = $this->connection->prepare('
        SELECT p.*, a.ArtistID, j.DayID AS DayDayID, j.Date AS DayDate, j.ImgPath AS DayImgPath, j.VenueID AS DayVenueID, j.Note AS DayNote,
               v.VenueID AS VenueID, v.Name AS VenueName, v.Address AS VenueAddress, v.ContactDetails AS VenueContactDetails
        FROM Performance p
        LEFT JOIN Artist a ON p.ArtistID = a.ArtistID
        LEFT JOIN JazzDay j ON p.DayID = j.DayID
        LEFT JOIN Venue v ON j.VenueID = v.VenueID
        WHERE p.ArtistID = ?
    ');
        $query->execute([$artist->ArtistID]);

        $performanceData = $query->fetchAll(\PDO::FETCH_ASSOC);
        $performances = [];

        foreach ($performanceData as $data) {

            /*$artist = new Artist(
                $data['ArtistArtistID'],
                $data['ArtistName'],
                $data['ArtistBio'],
                $data['ArtistHeaderImg'],
                $data['ArtistImg1'],
                $data['ArtistImg2'],
                $data['ArtistPerformanceImg']
            );*/

            $venue = new Venue(
                $data['VenueID'],
                $data['VenueName'],
                $data['VenueAddress'],
                $data['VenueContactDetails']
            );

            $jazzDay = new JazzDay(
                $data['DayDayID'],
                $data['DayDate'],
                $data['DayImgPath'],
                $data['DayNote'],
                $venue
            );

            $performance = new Performance(
                 $data['PerformanceID'],
               $artist,
                 $jazzDay,
               $data['Price'],
               $data['StartDateTime'],
                $data['EndDateTime'],
                 $data['AvailableTickets'],
                $data['TotalTickets'],
                $data['Details'],
            );

            $performances[] = $performance;
        }

        return $performances;
    }

    public function getPerformancesByJazzDay(JazzDay $day): array
    {
        $query = $this->connection->prepare('
        SELECT p.PerformanceID, p.Price, p.StartDateTime, p.EndDateTime, p.AvailableTickets, p.DayID, p.Details, p.TotalTickets,
               a.ArtistID AS ArtistArtistID, a.Name AS ArtistName, a.Bio AS ArtistBio, a.HeaderImg AS ArtistHeaderImg, a.ArtistImg1 AS ArtistImg1, a.ArtistImg2 AS ArtistImg2, a.PerformanceImg AS ArtistPerformanceImg
        FROM Performance p
        LEFT JOIN Artist a ON p.ArtistID = a.ArtistID
        WHERE p.DayID = ?
    ');
        $query->execute([$day->DayID]);
        $performanceData = $query->fetchAll(\PDO::FETCH_ASSOC);

        $performances = [];
        foreach ($performanceData as $data) {

            $artist = new Artist(
                $data['ArtistArtistID'],
                $data['ArtistName'],
                $data['ArtistBio'],
                $data['ArtistHeaderImg'],
                $data['ArtistImg1'],
                $data['ArtistImg2'],
                $data['ArtistPerformanceImg']
            );

            $performance = new Performance(
                $data['PerformanceID'],
                $artist,
                 $day,
                $data['Price'],
                $data['StartDateTime'],
                 $data['EndDateTime'],
                 $data['AvailableTickets'],
                 $data['TotalTickets'],
                 $data['Details'],
            );
            $performances[] = $performance;
        }

        return $performances;
    }

    public function getAllPerformances(): array
    {
        // change
        $query = $this->connection->prepare('
        SELECT 
    p.*, 
    a.*,
    j.*,
    v.VenueID, v.Name as VenueName, v.Address, v.ContactDetails
FROM Performance p
LEFT JOIN Artist a ON p.ArtistID = a.ArtistID
LEFT JOIN JazzDay j ON p.DayID = j.DayID
LEFT JOIN Venue v ON j.VenueID = v.VenueID

    ');
        $query->execute();

        $performanceData = $query->fetchAll(\PDO::FETCH_ASSOC);
        $performances = [];

        foreach ($performanceData as $data) {

            $artist = new Artist(
                $data['ArtistID'],
                $data['Name'],
                $data['Bio'],
                $data['HeaderImg'],
                $data['ArtistImg1'],
                $data['ArtistImg2'],
                $data['PerformanceImg']
            );

            $venue = new Venue(
                $data['VenueID'],
                $data['VenueName'],
                $data['Address'],
                $data['ContactDetails']
            );

            $jazzDay = new JazzDay(
                $data['DayID'],
                $data['Date'],
                $data['ImgPath'],
                $data['Note'],
                $venue
            );

            $performance = new Performance(
                $data['PerformanceID'],
                $artist,
                $jazzDay,
                $data['Price'],
                $data['StartDateTime'],
                $data['EndDateTime'],
                $data['AvailableTickets'],
                $data['TotalTickets'],
                $data['Details'],
            );

            $performances[] = $performance;
        }
        return $performances;
    }


    public function getJazzPassesByDate(string $date): array
    {
        $query = $this->connection->prepare('SELECT JazzPassID, Price, StartDateTime, EndDateTime, Note, TotalTickets, AvailableTickets FROM JazzPass WHERE StartDateTime <= ? AND EndDateTime >= ?');
        $query->execute([$date, $date]);

        $passesData = $query->fetchAll(\PDO::FETCH_ASSOC);
        $passes = [];

        foreach ($passesData as $passData) {
            $pass = new JazzPass(
                $passData['JazzPassID'],
                $passData['Price'],
                $passData['StartDateTime'],
                $passData['EndDateTime'],
                $passData['Note'],
                $passData['TotalTickets'],
                $passData['AvailableTickets']
            );
            $passes[] = $pass;
        }

        return $passes;
    }


    private function getSongsByArtistId(int $artistId): array {
        $query = $this->connection->prepare('SELECT SongID, ArtistID, SpotifyID FROM Song WHERE ArtistID = ?');
        $query->execute([$artistId]);
        $songsData = $query->fetchAll(\PDO::FETCH_ASSOC);

        $songs = [];
        foreach ($songsData as $songData) {
            $songs[] = new Song(
                $songData['SongID'],
                //$songData['ArtistID'],
                $songData['SpotifyID']
            );
        }

        return $songs;
    }

    private function getAlbumsByArtistId(int $artistId): array {
        $query = $this->connection->prepare('SELECT AlbumID, ArtistID, SpotifyID FROM Album WHERE ArtistID = ?');
        $query->execute([$artistId]);
        $albumsData = $query->fetchAll(\PDO::FETCH_ASSOC);

        $albums = [];
        foreach ($albumsData as $albumData) {
            $albums[] = new Album(
                $albumData['AlbumID'],
                //$albumData['ArtistID'],
                $albumData['SpotifyID']
            );
        }

        return $albums;
    }
}
