<?php

namespace service;

use Exception;
use Model\Artist;
use model\JazzDay;
use Model\JazzPass;
use model\Performance;
use model\Venue;
use Repository\JazzRepository;

require_once __DIR__.'/../service/BaseService.php';
require_once __DIR__.'/../repository/JazzRepository.php';
require_once __DIR__.'/../service/ImageService.php';


class JazzService extends BaseService
{
    private JazzRepository $repository;
    private ImageService $imageService;

    public function __construct()
    {
        $this->repository = new JazzRepository();
        $this->imageService = new ImageService();
    }

    //artist
    public function getArtistById(int $id): ?Artist
    {
        return $this->repository->getArtistById($id);
    }

    public function getAllArtists(): array
    {
        return $this->repository->getAllArtists();
    }

    public function updateArtist(int $artistId, string $name, string $bio, ?array $songs, ?array $albums, ?string $headerImg, ?string $artistImg1, ?string $artistImg2, ?string $performanceImg): void
    {
        $artist = $this->repository->getArtistById($artistId);

        $this->setDefaultSongsAndAlbumsIfEmpty($songs, $albums);
        $this->repository->updateArtist($artistId, $name, $bio,  $songs, $albums, $headerImg, $artistImg1, $artistImg2, $performanceImg);

        // delete old images if new were uploaded and if old images aren't placeholders
        if($headerImg !== null && $artist->HeaderImg !== '/img/jazz/artists/artistPlaceholder.jpg'){
            $this->imageService->deleteImage($artist->HeaderImg);
        }
        if ($artistImg1 !== null && $artist->ArtistImg1 !== '/img/jazz/artists/placeholder.jpg'){
            $this->imageService->deleteImage($artist->ArtistImg1);
        }
        if ($artistImg2 !== null && $artist->ArtistImg2 !== '/img/jazz/artists/placeholder.jpg'){
            $this->imageService->deleteImage($artist->ArtistImg2);
        }
        if ($performanceImg !== null){
            $this->imageService->deleteImage($artist->PerformanceImg);
        }
    }

    public function createArtist(string $name, string $bio, string $headerImg, string $artistImg1, string $artistImg2, string $performanceImg, array $songs, array $albums): bool
    {
        $this->setDefaultSongsAndAlbumsIfEmpty($songs, $albums);

        return $this->repository->createArtist($name, $bio, $headerImg, $artistImg1, $artistImg2, $performanceImg, $songs, $albums);
    }

    public function deleteArtist(int $id): void
    {
        try{
            $artist = $this->repository->getArtistById($id);
            $this->repository->deleteArtist($id);

            // delete images if they aren't placeholders
            if ($artist->HeaderImg !== '/img/jazz/artists/artistPlaceholder.jpg') {
                $this->imageService->deleteImage($artist->HeaderImg);
            }
            if ($artist->ArtistImg1 !== '/img/jazz/artists/placeholder.jpg') {
                $this->imageService->deleteImage($artist->ArtistImg1);
            }
            if ($artist->ArtistImg2 !== '/img/jazz/artists/placeholder.jpg') {
                $this->imageService->deleteImage($artist->ArtistImg2);
            }
            $this->imageService->deleteImage($artist->PerformanceImg);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    private function setDefaultSongsAndAlbumsIfEmpty(array &$songs, array &$albums): void
    {
        if ($albums[0] === null) {
            $albums[0] = '7oBC2PuPSvXkLEZdoCxsv5';
        }
        if ($albums[1] === null) {
            $albums[1] = '18g4jSwIbYcbJI5U7PIzMz';
        }
        if ($albums[2] === null) {
            $albums[2] = '0B7DKUR00yRXncWrlQwIR6';
        }
        if ($songs[0] === null) {
            $songs[0] = '6XQHlsNu6so4PdglFkJQRJ';
        }
        if ($songs[1] === null) {
            $songs[1] = '2VvDKx7lzdarObpQFn1iAh';
        }
        if ($songs[2] === null) {
            $songs[2] = '1otrWVcbCxemNnn7eiKW1P';
        }
    }

    // venues
    public function getVenueById(int $id): ?Venue
    {
        return $this->repository->getVenueById($id);
    }

    public function getAllVenues(): array
    {
        return $this->repository->getAllVenues();
    }

    public function updateVenue(int $venueId, string $name, string $address, string $contactDetails): bool
    {
        return $this->repository->updateVenue($venueId, $name, $address, $contactDetails);
    }

    public function createVenue(string $name, string $address, string $contactDetails): bool
    {
        return $this->repository->createVenue($name, $address, $contactDetails);
    }

    public function deleteVenue(int $venueId): bool
    {
        return $this->repository->deleteVenue($venueId);
    }

    // jazz days
    public function getJazzDayById(int $id): ?JazzDay
    {
        return $this->repository->getJazzDayById($id);
    }

    public function getAllJazzDays(): array
    {
        return $this->repository->getAllJazzDays();
    }

    public function updateJazzDay(int $id, string $date, int $venueId, string $note, ?string $imgPath = null): void
    {
        $currentImg = $this->repository->getJazzDayById($id)->ImgPath;

        $this->repository->updateJazzDay($id, $date, $venueId, $note, $imgPath);

        if($imgPath !== null){
            $this->imageService->deleteImage($currentImg);
        }
    }

    public function createJazzDay(string $date, int $venueId, string $note, ?string $imgPath): bool
    {
        return $this->repository->createJazzDay($date, $venueId, $note, $imgPath);
    }

    public function deleteJazzDay(int $id): void
    {
        try {
            $imgPath = $this->repository->getJazzDayById($id)->ImgPath;
            $this->repository->deleteJazzDay($id);

            $this->imageService->deleteImage($imgPath);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    // jazz overview page
    public function getEventDaysWithDetails(): array {
        $days = $this->repository->getAllJazzDays();

        $eventDays = [];
        foreach ($days as $day) {
            $performances = $this->repository->getPerformancesByJazzDay($day);
            if (!empty($performances)) {
                $jazzPasses = $this->repository->getJazzPassesByDate($day->Date);
                $eventDays[] = [
                    'day' => $day,
                    'performances' => $performances,
                    'passes' => $jazzPasses,
                ];
            }
        }
        return $eventDays;
    }

    // performances
    public function getPerformancesByArtist(Artist $artist): array
    {
        return $this->repository->getPerformancesByArtist($artist);
    }

    public function getAllPerformances(): array
    {
        return $this->repository->getAllPerformances();
    }

    public function getPerformanceById(int $performanceId): ?Performance
    {
        return $this->repository->getPerformanceById($performanceId);
    }

    public function deletePerformance(int $performanceId): bool
    {
        return $this->repository->deletePerformance($performanceId);
    }

    public function createPerformance(int $ArtistID, int $DayID, float $Price, string $StartDateTime, string $EndDateTime, int $AvailableTickets, int $TotalTickets, string $Details): bool
    {
        $date = ($this->repository->getJazzDayById($DayID))->Date;
        return $this->repository->createPerformance($ArtistID, $DayID, $Price, $date . ' ' . $StartDateTime, $date . ' ' . $EndDateTime, $AvailableTickets, $TotalTickets, $Details);
    }

    public function updatePerformance(int $PerformanceID,int $ArtistID, int $DayID, float $Price, string $StartDateTime, string $EndDateTime, int $AvailableTickets, int $TotalTickets, string $Details): bool
    {
        $date = ($this->repository->getJazzDayById($DayID))->Date;
        return $this->repository->updatePerformance($PerformanceID, $ArtistID, $DayID, $Price, $date . ' ' . $StartDateTime, $date . ' ' . $EndDateTime, $AvailableTickets, $TotalTickets, $Details);
    }

    // passes
    public function getJazzPassesByDate(string $date): array
    {
        return $this->repository->getJazzPassesByDate($date);
    }

    public function getJazzPassById(int $id): ?JazzPass {
        return $this->repository->getJazzPassById($id);
    }

    public function getAllJazzPasses(): array
    {
        return $this->repository->getAllJazzPasses();
    }

    public function updatePass(int $id, float $price, string $startDateTime, string $endDateTime, string $note, int $totalTickets, int $availableTickets): bool
    {
        return $this->repository->updatePass($id, $price, $startDateTime, $endDateTime, $note, $totalTickets, $availableTickets);
    }

    public function deletePass(int $id): bool
    {
        return $this->repository->deletePass($id);
    }

    public function createPass(float $price, string $startDateTime, string $endDateTime, string $note, int $totalTickets, int $availableTickets): bool
    {
        return $this->repository->createPass($price, $startDateTime, $endDateTime, $note, $totalTickets, $availableTickets);
    }
}
