<?php

namespace repository;

use Model\Artist;
use model\JazzDay;
use Model\JazzPass;
use Model\Performance;
use model\Venue;

require_once __DIR__.'/../model/Artist.php';
require_once __DIR__.'/../model/JazzDay.php';
require_once __DIR__.'/../model/Performance.php';
require_once __DIR__.'/../model/Venue.php';
require_once __DIR__.'/../model/JazzPass.php';
require_once __DIR__.'/../repository/BaseRepository.php';


class JazzRepository extends BaseRepository
{
    // artist
    public function getArtistById(int $id): ?Artist
    {
        $query = $this->connection->prepare('SELECT * FROM Artist WHERE ArtistID = ?');
        $query->execute([$id]);

        $artistData = $query->fetch(\PDO::FETCH_ASSOC);

        if (!$artistData) {
            return null;
        }
        return $this->createArtistFromData($artistData);
    }

    public function getAllArtists(): array
    {
        $query = $this->connection->prepare('SELECT * FROM Artist');
        $query->execute();

        $artistData = $query->fetchAll(\PDO::FETCH_ASSOC);

        $artists = [];
        foreach ($artistData as $data) {
            $artists[] = $this->createArtistFromData($data);
        }

        return $artists;
    }

    private function createArtistFromData(array $artistData): Artist {
        return new Artist(
            $artistData['ArtistID'],
            $artistData['Name'],
            $artistData['Bio'],
            $artistData['HeaderImg'],
            $artistData['ArtistImg1'],
            $artistData['ArtistImg2'],
            $artistData['PerformanceImg'],
            [
                $artistData['Song1'],
                $artistData['Song2'],
                $artistData['Song3']
            ],
            [
                $artistData['Album1'],
                $artistData['Album2'],
                $artistData['Album3']
            ]
        );
    }

    // get venues
    public function getVenueById(int $id): ?Venue
    {
        $query = $this->connection->prepare('SELECT * FROM Venue WHERE venueID = ?');
        $query->execute([$id]);

        $venueData = $query->fetch(\PDO::FETCH_ASSOC);

        if (!$venueData) {
            return null;
        }

        return $this->createVenueFromData($venueData);
    }

    public function getAllVenues(): array
    {
        $query = $this->connection->prepare('SELECT * FROM Venue');
        $query->execute();

        $venuesData = $query->fetchAll(\PDO::FETCH_ASSOC);

        $venues = [];
        foreach($venuesData as $venueData){
            $venues[] = $this->createVenueFromData($venueData);
        }

        return $venues;
    }

    private function createVenueFromData(array $venueData): Venue {
        return new Venue(
            $venueData['VenueID'],
            $venueData['Name'],
            $venueData['Address'],
            $venueData['ContactDetails']
        );
    }

    // venue crud
    public function updateVenue(int $venueId, string $name, string $address, string $contactDetails): bool
    {
        $query = $this->connection->prepare('UPDATE Venue SET Name = ?, Address = ?, ContactDetails = ? WHERE VenueID = ?');
        return $query->execute([$name, $address, $contactDetails, $venueId]);
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


    // get days
    public function getJazzDayById(int $id): ?JazzDay
    {
        $query = $this->connection->prepare('SELECT d.*, v.* FROM JazzDay d 
                                                    JOIN Venue v ON d.VenueID = v.VenueID WHERE d.DayID = ?');
        $query->execute([$id]);

        $jazzDayData = $query->fetch(\PDO::FETCH_ASSOC);

        if (!$jazzDayData) {
            return null;
        }

        return $this->createJazzDayFromData($jazzDayData);
    }

    public function getAllJazzDays(): array
    {
        $query = $this->connection->prepare('SELECT d.*, v.* FROM JazzDay d
                                                    JOIN Venue v ON d.VenueID = v.VenueID
                                                    ORDER BY d.Date ASC');
        $query->execute();

        $jazzDaysData = $query->fetchAll(\PDO::FETCH_ASSOC);
        $jazzDays = [];

        foreach ($jazzDaysData as $jazzDayData) {
            $jazzDays[] = $this->createJazzDayFromData($jazzDayData);
        }

        return $jazzDays;
    }

    private function createJazzDayFromData(array $jazzDayData): JazzDay
    {
        $venue = $this->createVenueFromData($jazzDayData);

        return new JazzDay(
            $jazzDayData['DayID'],
            $jazzDayData['Date'],
            $jazzDayData['ImgPath'],
            $jazzDayData['Note'],
            $venue
        );
    }

    // day crud
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

    // img
    public function getImgPath(int $id): ?string
    {
        $query = $this->connection->prepare('SELECT ImgPath FROM JazzDay WHERE DayID = ?');
        $query->execute([$id]);

        return $query->fetch(\PDO::FETCH_ASSOC)['ImgPath'];
    }

    // performances
    public function getPerformancesByArtist(Artist $artist): array
    {

        $query = $this->connection->prepare('SELECT p.*, j.*, v.* FROM Performance p
                                                    LEFT JOIN JazzDay j ON p.DayID = j.DayID
                                                    LEFT JOIN Venue v ON j.VenueID = v.VenueID
                                                    WHERE p.ArtistID = ?');
        $query->execute([$artist->ArtistID]);

        $performanceData = $query->fetchAll(\PDO::FETCH_ASSOC);

        $performances = [];
        foreach ($performanceData as $data) {
            $performances[] = $this->createPerformanceFromData($data, $artist, null);
        }

        return $performances;
    }

    public function getPerformancesByJazzDay(JazzDay $day): array
    {
        $query = $this->connection->prepare('SELECT p.*, a.* FROM Performance p LEFT JOIN Artist a ON p.ArtistID = a.ArtistID WHERE p.DayID = ?');
        $query->execute([$day->DayID]);
        $performanceData = $query->fetchAll(\PDO::FETCH_ASSOC);

        $performances = [];
        foreach ($performanceData as $data) {
            $performances[] = $this->createPerformanceFromData($data, null, $day);
        }

        return $performances;
    }

    public function getAllPerformances(): array
    {
        $query = $this->connection->prepare('SELECT p.*, a.*, j.*, v.* FROM Performance p
                                                    LEFT JOIN Artist a ON p.ArtistID = a.ArtistID
                                                    LEFT JOIN JazzDay j ON p.DayID = j.DayID
                                                    LEFT JOIN Venue v ON j.VenueID = v.VenueID');
        $query->execute();

        $performanceData = $query->fetchAll(\PDO::FETCH_ASSOC);

        $performances = [];
        foreach ($performanceData as $data) {
            $performances[] = $this->createPerformanceFromData($data);
        }

        return $performances;
    }

    public function getPerformanceById(int $performanceId): ?Performance
    {
        $query = $this->connection->prepare('SELECT p.*, a.*, j.*, v.* FROM Performance p
                                                    LEFT JOIN Artist a ON p.ArtistID = a.ArtistID
                                                    LEFT JOIN JazzDay j ON p.DayID = j.DayID
                                                    LEFT JOIN Venue v ON j.VenueID = v.VenueID
                                                    WHERE p.PerformanceID = ?');
        $query->execute([$performanceId]);

        $performanceData = $query->fetch(\PDO::FETCH_ASSOC);

        if (!$performanceData) {
            return null;
        }

        return $this->createPerformanceFromData($performanceData);
    }


    private function createPerformanceFromData(array $data, ?Artist $artist = null, ?JazzDay $jazzDay = null): Performance
    {
        if ($artist === null)
            $artist = $this->createArtistFromData($data);

        if ($jazzDay === null)
            $jazzDay = $this->createJazzDayFromData($data);

        return new Performance(
            $data['PerformanceID'],
            $artist,
            $jazzDay,
            $data['Price'],
            $data['StartDateTime'],
            $data['EndDateTime'],
            $data['AvailableTickets'],
            $data['TotalTickets'],
            $data['Details']
        );
    }

    // passes
    public function getJazzPassesByDate(string $date): array
    {
        $query = $this->connection->prepare('SELECT JazzPassID, Price, StartDateTime, EndDateTime, Note, TotalTickets, AvailableTickets FROM JazzPass WHERE StartDateTime <= ? AND EndDateTime >= ?');
        $query->execute([$date, $date]);

        $passesData = $query->fetchAll(\PDO::FETCH_ASSOC);
        $passes = [];

        foreach ($passesData as $passData) {
            $passes[] = $this->createJazzPassFromData($passData);
        }

        return $passes;
    }

    public function getJazzPassById(int $id): ?JazzPass {
        $query = $this->connection->prepare('SELECT * FROM JazzPass WHERE JazzPassID = ?');
        $query->execute([$id]);

        $passData = $query->fetch(\PDO::FETCH_ASSOC);

        if (!$passData) {
            return null;
        }

        return $this->createJazzPassFromData($passData);
    }

    public function getAllJazzPasses(): array {
        $query = $this->connection->prepare('SELECT * FROM JazzPass');
        $query->execute();

        $passesData = $query->fetchAll(\PDO::FETCH_ASSOC);
        $passes = [];

        foreach ($passesData as $passData) {
            $passes[] = $this->createJazzPassFromData($passData);
        }

        return $passes;
    }

    private function createJazzPassFromData(array $passData): JazzPass {
        return new JazzPass(
            $passData['JazzPassID'],
            $passData['Price'],
            $passData['StartDateTime'],
            $passData['EndDateTime'],
            $passData['Note'],
            $passData['TotalTickets'],
            $passData['AvailableTickets']
        );
    }
}
