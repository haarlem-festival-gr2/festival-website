<?php

namespace Service;

use Exception;

require_once __DIR__.'/../service/ImageService.php';

class ValidateInputService
{
    private ImageService $imageService;

    public function __construct()
    {
        $this->imageService = new ImageService();
    }

    public function checkRequiredFields($fields): void
    {
        foreach ($fields as $field) {
            if (empty($field)) {
                $error = 'All fields marked with * are required.';
                echo "<div class='error bg-red-100 border-l-4 border-red-500 text-red-700 p-4 m-4' id='error' role='alert'>$error</div>";
                exit();
            }
        }
    }

    public function validatePrice($price): void
    {
        if (! is_numeric($price) || $price < 0) {
            $error = 'Price must be a non-negative number.';
            echo "<div class='error bg-red-100 border-l-4 border-red-500 text-red-700 p-4 m-4' id='error' role='alert'>$error</div>";
            exit();
        }
    }

    public function validateTime($startTime, $endTime): void
    {
        if (strtotime($startTime) > strtotime($endTime)) {
            $error = 'Start time must be before end time.';
            echo "<div class='error bg-red-100 border-l-4 border-red-500 text-red-700 p-4 m-4' id='error' role='alert'>$error</div>";
            exit();
        }
    }

    public function validateDate($startDate, $endDate): void
    {
        if (strtotime($startDate) > strtotime($endDate)) {
            $error = 'Start date must be before end date.';
            echo "<div class='error bg-red-100 border-l-4 border-red-500 text-red-700 p-4 m-4' id='error' role='alert'>$error</div>";
            exit();
        }

    }

    public function validateEmptyNumbers($numbers): void
    {
        foreach ($numbers as $number) {
            if (! isset($number) && $number !== '0') {
                $error = 'All fields marked with * are required.';
                echo "<div class='error bg-red-100 border-l-4 border-red-500 text-red-700 p-4 m-4' id='error' role='alert'>$error</div>";
                exit();
            }
        }
    }

    public function validateTicketFields($availableTickets, $totalTickets): void
    {
        if (! is_numeric($availableTickets) || ! is_numeric($totalTickets) || $availableTickets < 0 || $totalTickets < 0 || ! is_int((int) $availableTickets) || ! is_int((int) $totalTickets) || (int) $availableTickets > (int) $totalTickets) {
            $error = 'Available and total tickets must be valid non-negative integers, and available tickets cannot exceed total tickets.';
            echo "<div class='error bg-red-100 border-l-4 border-red-500 text-red-700 p-4 m-4' id='error' role='alert'>$error</div>";
            exit();
        }
    }

    public function validateAndUploadImage($image, $dir)
    {
        if (isset($_FILES[$image]) && $_FILES[$image]['error'] === UPLOAD_ERR_OK) {
            try {
                return $this->imageService->uploadImage($_FILES[$image], $dir);
            } catch (Exception $e) {
                echo "<div class='error bg-red-100 border-l-4 border-red-500 text-red-700 p-4 m-4' role='alert'>{$e->getMessage()}</div>";
                exit();
            }
        } else {
            $imgName = str_replace(['_', ' '], '', $image);
            $error = "Please upload an image {$imgName}.";
            echo "<div class='error bg-red-100 border-l-4 border-red-500 text-red-700 p-4 m-4' id='error' role='alert'>$error</div>";
            exit();
        }
    }

    public function updateImage($image, $dir)
    {
        if (isset($_FILES[$image]) && $_FILES[$image]['error'] === UPLOAD_ERR_OK) {
            try {
                return $this->imageService->uploadImage($_FILES[$image], $dir);
            } catch (Exception $e) {
                echo "<div class='error bg-red-100 border-l-4 border-red-500 text-red-700 p-4 m-4' role='alert'>{$e->getMessage()}</div>";
                exit();
            }
        } else {
            return null;
        }
    }

    public function validateArtistBio($bio): void
    {
        if (strlen($bio) < 800) {
            $error = 'Bio should not be less then 800 characters (around 150 words).';
            echo "<div class='error bg-red-100 border-l-4 border-red-500 text-red-700 p-4 m-4' id='error' role='alert'>$error</div>";
            exit();
        }
    }

    public function validateAlbums(array &$albums): void
    {
        if (strlen($albums[0]) < 22) {
            $albums[0] = '7oBC2PuPSvXkLEZdoCxsv5';
        }
        if (strlen($albums[1]) < 22) {
            $albums[1] = '18g4jSwIbYcbJI5U7PIzMz';
        }
        if (strlen($albums[2]) < 22) {
            $albums[2] = '0B7DKUR00yRXncWrlQwIR6';
        }
    }

    public function validateSongs(array &$songs): void
    {
        if (strlen($songs[0]) < 22) {
            $songs[0] = '6XQHlsNu6so4PdglFkJQRJ';
        }
        if (strlen($songs[1]) < 22) {
            $songs[1] = '2VvDKx7lzdarObpQFn1iAh';
        }
        if (strlen($songs[2]) < 22) {
            $songs[2] = '1otrWVcbCxemNnn7eiKW1P';
        }
    }
}
