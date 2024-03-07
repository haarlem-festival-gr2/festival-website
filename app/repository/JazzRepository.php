<?php

namespace Repository;

require_once __DIR__.'/../model/Artist.php';
require_once __DIR__.'/../model/JazzDay.php';
require_once __DIR__.'/../model/Performance.php';
require_once __DIR__.'/../model/Venue.php';
require_once __DIR__.'/../model/Album.php';
require_once __DIR__.'/../model/Song.php';
require_once __DIR__.'/../model/FestivalEvent.php';

class JazzRepository extends BaseRepository
{
    public function getArtistById(int $id): mixed // change it
    {
        $query = $this->connection->prepare('SELECT ArtistID, Name, Bio, HeaderImg, ArtistImg1, ArtistImg2, PerformanceImg FROM Artist WHERE ArtistID = ?');
        $query->execute([$id]);

        $query->setFetchMode(\PDO::FETCH_CLASS, "\Model\Artist");

        return $query->fetch();
    }

    public function getVenueById(int $id): mixed
    {
        $query = $this->connection->prepare('SELECT VenueID, Name, Address, Email, ContactDetails FROM Venue WHERE venueID = ?');
        $query->execute([$id]);

        $query->setFetchMode(\PDO::FETCH_CLASS, "\Model\Venue");

        return $query->fetch();
    }

    public function getJazzDayById(int $id): mixed
    {
        $query = $this->connection->prepare('SELECT DayID, DayNumber, Date, ImgPath, VenueID, Note FROM JazzDay WHERE dayID = ?');
        $query->execute([$id]);

        $query->setFetchMode(\PDO::FETCH_CLASS, "\model\JazzDay");

        return $query->fetch();
    }

    public function getAllJazzDays(): array
    {
        $query = $this->connection->prepare('SELECT DayID, DayNumber, Date, ImgPath, VenueID, Note FROM JazzDay ORDER BY DayNumber ASC');
        $query->execute();

        $query->setFetchMode(\PDO::FETCH_CLASS, "\model\JazzDay");

        return $query->fetchAll();
    }

    public function getPerformanceById(int $id): mixed
    {
        $query = $this->connection->prepare('SELECT PerformanceID, ArtistID, Price, StartDateTime, EndDateTime, AvailableTickets, DayID, VenueID, Hall FROM Performance WHERE PerformanceID = ?');
        $query->execute([$id]);

        $query->setFetchMode(\PDO::FETCH_CLASS, "\model\Performance");

        return $query->fetch();
    }

    public function getPerformancesByJazzDay1(int $dayID): array
    {
        $query = $this->connection->prepare('SELECT PerformanceID, ArtistID, Price, StartDateTime, EndDateTime, AvailableTickets, DayID, VenueID, Hall FROM Performance WHERE DayID = ?');
        $query->execute([$dayID]);

        $query->setFetchMode(\PDO::FETCH_CLASS, "\model\Performance");

        return $query->fetchAll();
    }

    public function getPerformancesByJazzDay(int $dayID): array
    {
        $query = $this->connection->prepare('SELECT Performance.*, Artist.ArtistID AS ArtistArtistID, Artist.Name, Artist.Bio, Artist.HeaderImg, Artist.ArtistImg1, Artist.ArtistImg2, Artist.PerformanceImg FROM Performance LEFT JOIN Artist ON Performance.ArtistID = Artist.ArtistID WHERE Performance.DayID = ?');
        $query->execute([$dayID]);
        $performanceData = $query->fetchAll(\PDO::FETCH_ASSOC);

        $performances = [];
        foreach ($performanceData as $data) {
            $performance = new \Model\Performance();

            $performance->setPerformanceID($data['PerformanceID']);
            $performance->setPrice($data['Price']);
            $performance->setStartDateTime($data['StartDateTime']);
            $performance->setEndDateTime($data['EndDateTime']);
            $performance->setAvailableTickets($data['AvailableTickets']);
            $performance->setDayID($data['DayID']);
            $performance->setVenueID($data['VenueID']);
            $performance->setHall($data['Hall'] ?? null);
            $artist = new \Model\Artist();

            $artist->setArtistID($data['ArtistArtistID']);
            $artist->setArtistName($data['Name']);
            $artist->setBio($data['Bio'] ?? '');
            $artist->setHeaderImg($data['HeaderImg'] ?? '');
            $artist->setArtistImg1($data['ArtistImg1'] ?? '');
            $artist->setArtistImg2($data['ArtistImg2'] ?? '');
            $artist->setPerformanceImg($data['PerformanceImg']);

            // Associate Artist with Performance
            $performance->setArtist($artist);

            $performances[] = $performance;
        }

        return $performances;
    }

    public function getFestivalEventByName(string $name): mixed
    {
        $query = $this->connection->prepare('SELECT FestivalEventID, Name, Description, ImgPath, StartDate, EndDate FROM FestivalEvent WHERE Name = ?');
        $query->execute([$name]);

        $query->setFetchMode(\PDO::FETCH_CLASS, "\model\FestivalEvent");

        return $query->fetch();
    }

    public function getSongsByArtistId(int $artistId): array
    {
        $query = $this->connection->prepare('SELECT SongID, ArtistID, SpotifyID FROM Song WHERE ArtistID = ?');
        $query->execute([$artistId]);

        $query->setFetchMode(\PDO::FETCH_CLASS, "\model\Song");

        return $query->fetchAll();
    }

    public function getAlbumsByArtistId(int $artistId): array
    {
        $query = $this->connection->prepare('SELECT AlbumID, ArtistID, SpotifyID FROM Album WHERE ArtistID = ?');
        $query->execute([$artistId]);

        $query->setFetchMode(\PDO::FETCH_CLASS, "\model\Album");

        return $query->fetchAll();
    }
}
