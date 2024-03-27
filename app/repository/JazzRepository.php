<?php

namespace repository;

use Exception;
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
    // retrieve artists
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
    // create edit delete artists
    public function updateArtist1(int $artistId, string $name, string $bio, array $songs, array $albums, string $headerImg, string $artistImg1, string $artistImg2, string $performanceImg): bool
    {
        $query = $this->connection->prepare('UPDATE Artist SET Name = ?, Bio = ?, HeaderImg = ?, ArtistImg1 = ?, ArtistImg2 = ?, PerformanceImg = ?, Song1 = ?, Song2 = ?, Song3 = ?, Album1 = ?, Album2 = ?, Album3 = ? WHERE ArtistID = ?');
        return $query->execute([$name, $bio, $headerImg, $artistImg1, $artistImg2, $performanceImg, $songs[0], $songs[1], $songs[2], $albums[0], $albums[1], $albums[2], $artistId]);
    }

    public function updateArtist(int $artistId, string $name, string $bio, array $songs, array $albums, ?string $headerImg = null, ?string $artistImg1 = null, ?string $artistImg2 = null, ?string $performanceImg = null): bool {
        $sql = 'UPDATE Artist SET Name = ?, Bio = ?';

        $parameters = [$name, $bio];

        $images = ['HeaderImg' => $headerImg, 'ArtistImg1' => $artistImg1, 'ArtistImg2' => $artistImg2, 'PerformanceImg' => $performanceImg];
        foreach ($images as $column => $path) {
            if ($path !== null) {
                $sql .= ", $column = ?";
                $parameters[] = $path;
            }
        }

        $sql .= ", Song1 = ?, Song2 = ?, Song3 = ?, Album1 = ?, Album2 = ?, Album3 = ?";
        foreach ([$songs[0] ?? '', $songs[1] ?? '', $songs[2] ?? '', $albums[0] ?? '', $albums[1] ?? '', $albums[2] ?? ''] as $value) {
            $parameters[] = $value;
        }

        $sql .= ' WHERE ArtistID = ?';
        $parameters[] = $artistId;
        $query = $this->connection->prepare($sql);

        return $query->execute($parameters);
    }

    public function createArtist(string $name, string $bio, string $headerImg, string $artistImg1, string $artistImg2, string $performanceImg, array $songs, array $albums): bool
    {
        $query = $this->connection->prepare('INSERT INTO Artist (Name, Bio, HeaderImg, ArtistImg1, ArtistImg2, PerformanceImg, Song1, Song2, Song3, Album1, Album2, Album3) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
        return $query->execute([$name, $bio, $headerImg, $artistImg1, $artistImg2, $performanceImg, $songs[0], $songs[1], $songs[2], $albums[0], $albums[1], $albums[2]]);
    }

    public function deleteArtist(int $id): bool
    {
        if ($this->hasPerformancesForArtist($id))
            throw new Exception("Cannot delete this artist as it has associated performances. PLease delete or link associated performances to other artists.");

        $query = $this->connection->prepare('DELETE FROM Artist WHERE ArtistID = ?');
        return $query->execute([$id]);
    }

    private function hasPerformancesForArtist($id): bool
    {
        $query = $this->connection->prepare('SELECT 1 FROM Performance WHERE ArtistID = ? LIMIT 1');
        $query->execute([$id]);

        return $query->rowCount() > 0;
    }

    // retrieve venues
    public function getVenueById(int $id): ?Venue
    {
        $query = $this->connection->prepare('SELECT VenueID, Name as VenueName, Address, ContactDetails FROM Venue WHERE VenueID = ?');
        $query->execute([$id]);

        $venueData = $query->fetch(\PDO::FETCH_ASSOC);

        if (!$venueData) {
            return null;
        }

        return $this->createVenueFromData($venueData);
    }

    public function getAllVenues(): array
    {
        $query = $this->connection->prepare('SELECT VenueID, Name as VenueName, Address, ContactDetails FROM Venue');
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
            $venueData['VenueName'],
            $venueData['Address'],
            $venueData['ContactDetails']
        );
    }

    // edit crate delete venues
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

    public function deleteVenue(int $id): bool
    {
        if ($this->hasDaysForVenue($id))
            throw new Exception("Cannot delete this venue as it has associated days. PLease delete or link associated days to other venues.");

        $query = $this->connection->prepare('DELETE FROM Venue WHERE VenueID = ?');
        return $query->execute([$id]);
    }

    private function hasDaysForVenue($id): bool
    {
        $query = $this->connection->prepare('SELECT 1 FROM JazzDay WHERE VenueID = ? LIMIT 1');
        $query->execute([$id]);

        return $query->rowCount() > 0;
    }


    // retrieve jazz days
    public function getJazzDayById(int $id): ?JazzDay
    {
        $query = $this->connection->prepare('SELECT d.*, v.VenueID, v.Name as VenueName, v.Address, v.ContactDetails FROM JazzDay d 
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
        $query = $this->connection->prepare('SELECT d.*, v.VenueID, v.Name as VenueName, v.Address, v.ContactDetails FROM JazzDay d
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

    public function getAllJazzDaysByVenueId($id): array
    {
        $query = $this->connection->prepare('SELECT d.*, v.VenueID, v.Name as VenueName,  v.Address, v.ContactDetails FROM JazzDay d
                                                JOIN Venue v ON d.VenueID = v.VenueID
                                                WHERE d.VenueID = ?');
        $query->execute([$id]);

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

    // create edit delete days
    public function updateJazzDay(int $dayId, string $date, int $venueId, string $note, ?string $imgPath = null): bool
    {
        $sql = 'UPDATE JazzDay SET Date = ?, VenueID = ?, Note = ?';
        $parameters = [$date, $venueId, $note];

        if ($imgPath !== null) {
            $sql .= ', ImgPath = ?';
            $parameters[] = $imgPath;
        }
        $sql .= ' WHERE DayID = ?';
        $parameters[] = $dayId;

        $query = $this->connection->prepare($sql);
        return $query->execute($parameters);
    }

    public function createJazzDay(string $date, int $venueId, string $note, string $imgPath): bool
    {
        $query = $this->connection->prepare('INSERT INTO JazzDay (Date, VenueID, Note, ImgPath) VALUES (?, ?, ?, ?)');
        return $query->execute([$date, $venueId, $note, $imgPath]);
    }

    private function hasPerformancesForDay($id): bool
    {
        $query = $this->connection->prepare('SELECT 1 FROM Performance WHERE DayID = ? LIMIT 1');
        $query->execute([$id]);

        return $query->rowCount() > 0;
    }

    public function deleteJazzDay(int $id): bool
    {
        if ($this->hasPerformancesForDay($id))
            throw new Exception("Cannot delete this jazz day as it has associated performances. PLease delete or link associated performances to other days.");

        $query = $this->connection->prepare('DELETE FROM JazzDay WHERE DayID = ?');
        return $query->execute([$id]);
    }

    // retrieve performances
    public function getPerformancesByArtist(Artist $artist): array
    {

        $query = $this->connection->prepare('SELECT p.*, j.*, v.VenueID, v.Name as VenueName, v.Address, v.ContactDetails FROM Performance p
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
        $query = $this->connection->prepare('SELECT p.*, a.*, j.*, v.VenueID, v.Name as VenueName, v.Address, v.ContactDetails FROM Performance p
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
        $query = $this->connection->prepare('SELECT p.*, a.*, j.*, v.VenueID, v.Name as VenueName, v.Address, v.ContactDetails FROM Performance p
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

    // create edit delete performances
    public function deletePerformance(int $performanceId): bool
    {
        $query = $this->connection->prepare('DELETE FROM Performance WHERE PerformanceID = ?');
        return $query->execute([$performanceId]);
    }
    public function createPerformance(int $ArtistID, int $DayID, float $Price, string $StartDateTime, string $EndDateTime, int $AvailableTickets, int $TotalTickets, string $Details): bool
    {
        $query = $this->connection->prepare('INSERT INTO Performance (ArtistID, DayID, Price, StartDateTime, EndDateTime, AvailableTickets, TotalTickets, Details) VALUES (?, ?, ?, ?, ?, ?, ?, ?)');
        return $query->execute([$ArtistID, $DayID, $Price, $StartDateTime, $EndDateTime, $AvailableTickets, $TotalTickets, $Details]);
    }

    public function updatePerformance(int $PerformanceID,int $ArtistID, int $DayID, float $Price, string $StartDateTime, string $EndDateTime, int $AvailableTickets, int $TotalTickets, string $Details): bool
    {
        $query = $this->connection->prepare('UPDATE Performance SET ArtistID = ?, DayID = ?, Price = ?, StartDateTime = ?, EndDateTime = ?, AvailableTickets = ?, TotalTickets = ?, Details = ? WHERE PerformanceID = ?');
        return $query->execute([$ArtistID, $DayID, $Price, $StartDateTime, $EndDateTime, $AvailableTickets, $TotalTickets, $Details, $PerformanceID]);
    }

    // retrieve passes
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

    // create edit delete passes
    public function createPass(float $price, string $startDateTime, string $endDateTime, string $note, int $totalTickets, int $availableTickets): bool
    {
        $query = $this->connection->prepare('INSERT INTO JazzPass (Price, StartDateTime, EndDateTime, Note, TotalTickets, AvailableTickets) VALUES (?, ?, ?, ?, ?, ?)');
        return $query->execute([$price, $startDateTime, $endDateTime, $note, $totalTickets, $availableTickets]);
    }

    public function updatePass(int $id, float $price, string $startDateTime, string $endDateTime, string $note, int $totalTickets, int $availableTickets): bool
    {
        $query = $this->connection->prepare('UPDATE JazzPass SET Price = ?, StartDateTime = ?, EndDateTime = ?, Note = ?, TotalTickets = ?, AvailableTickets = ? WHERE JazzPassID = ?');
        return $query->execute([$price, $startDateTime, $endDateTime, $note, $totalTickets, $availableTickets, $id]);
    }

    public function deletePass(int $id): bool
    {
        $query = $this->connection->prepare('DELETE FROM JazzPass WHERE JazzPassID = ?');
        return $query->execute([$id]);
    }

}
