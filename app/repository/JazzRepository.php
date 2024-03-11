<?php

namespace repository;

use Model\Artist;
use Model\Performance;

require_once __DIR__.'/../model/Artist.php';
require_once __DIR__.'/../model/JazzDay.php';
require_once __DIR__.'/../model/Performance.php';
require_once __DIR__.'/../model/Venue.php';
require_once __DIR__.'/../model/Album.php';
require_once __DIR__.'/../model/Song.php';
require_once __DIR__.'/../model/JazzPass.php';

class JazzRepository extends BaseRepository
{
    public function getArtistById(int $id): mixed
    {
        $query = $this->connection->prepare('SELECT ArtistID, Name, Bio, HeaderImg, ArtistImg1, ArtistImg2, PerformanceImg FROM Artist WHERE ArtistID = ?');
        $query->execute([$id]);

        $query->setFetchMode(\PDO::FETCH_CLASS, "\Model\Artist");

        return $query->fetch();
    }

    public function getVenueById(int $id): mixed
    {
        $query = $this->connection->prepare('SELECT VenueID, Name, Address, ContactDetails FROM Venue WHERE venueID = ?');
        $query->execute([$id]);

        $query->setFetchMode(\PDO::FETCH_CLASS, "\Model\Venue");

        return $query->fetch();
    }

    public function getVenueByPerformanceId(int $performanceId): mixed
    {
        $query = $this->connection->prepare('SELECT v.VenueID, v.Name, v.Address, v.ContactDetails FROM Venue AS v
                                                JOIN JazzDay AS jd ON v.VenueID = jd.VenueID
                                                JOIN Performance AS p ON jd.DayID = p.DayID WHERE p.PerformanceID = ?');
        $query->execute([$performanceId]);

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

    public function getPerformancesByArtistId(int $artistId): array
    {
        $query = $this->connection->prepare('SELECT PerformanceID, Price, StartDateTime, EndDateTime, AvailableTickets, DayID, VenueID, Details, TotalTickets FROM Performance WHERE ArtistID = ?');
        $query->execute([$artistId]);

        $performanceData = $query->fetchAll(\PDO::FETCH_ASSOC);

        $performances = [];
        foreach ($performanceData as $data) {
            $performance = new Performance();
            $performance->setPerformanceID($data['PerformanceID']);
            $performance->setPrice($data['Price']);
            $performance->setStartDateTime($data['StartDateTime']);
            $performance->setEndDateTime($data['EndDateTime']);
            $performance->setAvailableTickets($data['AvailableTickets']);
            $performance->setDayID($data['DayID']);
            $performance->setVenueID($data['VenueID']);
            $performance->setDetails($data['Details'] ?? null);
            $performance->setTotalTickets($data['TotalTickets']);
            $performances[] = $performance;
        }
        return $performances;
    }

    public function getPerformancesByJazzDay(int $dayID): array
    {
        $query = $this->connection->prepare('SELECT PerformanceID, Performance.ArtistID, Price, StartDateTime, EndDateTime, AvailableTickets, DayID, VenueID, Details, TotalTickets, Artist.ArtistID AS ArtistArtistID, Artist.Name, Artist.Bio, Artist.HeaderImg, Artist.ArtistImg1, Artist.ArtistImg2, Artist.PerformanceImg FROM Performance LEFT JOIN Artist ON Performance.ArtistID = Artist.ArtistID WHERE Performance.DayID = ?');
        $query->execute([$dayID]);
        $performanceData = $query->fetchAll(\PDO::FETCH_ASSOC);

        $performances = [];
        foreach ($performanceData as $data) {
            $performance = new Performance();

            $performance->setPerformanceID($data['PerformanceID']);
            $performance->setPrice($data['Price']);
            $performance->setStartDateTime($data['StartDateTime']);
            $performance->setEndDateTime($data['EndDateTime']);
            $performance->setAvailableTickets($data['AvailableTickets']);
            $performance->setDayID($data['DayID']);
            $performance->setVenueID($data['VenueID']);
            $performance->setDetails($data['Details'] ?? null);
            $performance->setTotalTickets($data['TotalTickets']);
            $artist = new Artist();

            $artist->setArtistID($data['ArtistArtistID']);
            $artist->setArtistName($data['Name']);
            $artist->setBio($data['Bio'] ?? '');
            $artist->setHeaderImg($data['HeaderImg'] ?? '');
            $artist->setArtistImg1($data['ArtistImg1'] ?? '');
            $artist->setArtistImg2($data['ArtistImg2'] ?? '');
            $artist->setPerformanceImg($data['PerformanceImg']);

            $performance->setArtist($artist);

            $performances[] = $performance;
        }

        return $performances;
    }

    public function getJazzPassesByDate(string $date): array
    {
        $query = $this->connection->prepare('SELECT JazzPassID, Price, StartDateTime, EndDateTime, Note, TotalTickets, AvailableTickets FROM JazzPass WHERE StartDateTime <= ? AND EndDateTime >= ?');
        $query->execute([$date, $date]);

        $query->setFetchMode(\PDO::FETCH_CLASS, "\Model\JazzPass");

        return $query->fetchAll();
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
