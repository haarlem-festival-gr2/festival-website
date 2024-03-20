<?php

namespace service;

use Model\Artist;
use model\JazzDay;
use Model\JazzPass;
use model\Performance;
use model\Venue;
use Repository\JazzRepository;

require_once __DIR__.'/../service/BaseService.php';
require_once __DIR__.'/../repository/JazzRepository.php';

class JazzService extends BaseService
{
    private JazzRepository $repository;

    public function __construct()
    {
        $this->repository = new JazzRepository();
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

    //artist
    public function getArtistById(int $id): ?Artist
    {
        return $this->repository->getArtistById($id);
    }

    public function getAllArtists(): array
    {
        return $this->repository->getAllArtists();
    }

    // performances
    public function getPerformancesByArtist(Artist $artist): array
    {
        return $this->repository->getPerformancesByArtist($artist);
    }

    public function getPerformancesByJazzDay(JazzDay $day): array
    {
        return $this->repository->getPerformancesByJazzDay($day);
    }

    public function getAllPerformances(): array
    {
        return $this->repository->getAllPerformances();
    }

    public function getPerformanceById(int $performanceId): ?Performance{
        return $this->repository->getPerformanceById($performanceId);
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

    public function updateJazzDay(int $jazzDayId, string $date, int $venueId, string $note, string $imgPath): bool
    {
        if (empty($imgPath)) {
            $imgPath = '/img/jazz/jazzDay4.png'; // Specify the default image path
        }
        return $this->repository->updateJazzDay($jazzDayId, $date, $venueId, $note, $imgPath);
    }

    public function createJazzDay(string $date, int $venueId, string $note, ?string $imgPath): bool {
        if (empty($imgPath)) {
            $imgPath = '/img/jazz/jazzDay4.png'; // Specify the default image path
        }
        return $this->repository->createJazzDay($date, $venueId, $note, $imgPath);
    }
    public function deleteJazzDay(int $jazzDayId): bool
    {
        $imgPath = $this->repository->getImgPath($jazzDayId);

        if ($imgPath) {
            // Attempt to delete the image file
            $imagePath = $_SERVER['DOCUMENT_ROOT'] . $imgPath;
            if (file_exists($imagePath)) {
                unlink($imagePath); // Deletes the file
            }
        }
        return $this->repository->deleteJazzDay($jazzDayId);
    }

    public function uploadImage($image): string
    {
        $imgPath = NULL;
            // Validate the file (size, type, etc.)
        // change the size of image
            if ($image['size'] < 5000000) { // For example, less than 5MB
                $validTypes = ['image/jpeg', 'image/png'];
                if (in_array($image['type'], $validTypes)) {
                    // Determine the path where you want to save the file
                    $uploadDir = $_SERVER['DOCUMENT_ROOT'] . '/img/jazz/';
                    $fileName = basename($image['name']);
                    $uploadPath = $uploadDir . $fileName;

                    // Move the file to your directory
                    if (move_uploaded_file($image['tmp_name'], $uploadPath)) {
                        // Update database with the path
                        $imgPath = '/img/jazz/' . $fileName;
                        return $imgPath;
                        // Here you call your function to update the database with $imgPath
                    } else {
                        $errorMessage = "error.";
                    }
                } else {
                    $errorMessage = "Invalid file type. Only JPEG and PNG are allowed.";
                }
            } else {
                $errorMessage = "error.";
            }
            throw new Exception($errorMessage);
    }
}
