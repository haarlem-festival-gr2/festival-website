<?php

namespace Service;

use Exception;

require_once __DIR__.'/../service/BaseService.php';

class ImageService extends BaseService
{
    /**
     * @param  array  $image  The image file to upload, typically from $_FILES array.
     * @param  string  $subDir  Optional. For example, 'jazz/artists', 'jazz'.
     *                          The subdirectory under the base image directory where the image should be uploaded.
     *                          Defaults to an empty string.
     * @return string The path to the uploaded image.
     *
     * @throws Exception If the file upload fails due to invalid file type, size, or other errors.
     */
    public function uploadImage(array $image, string $subDir = ''): string
    {
        $validTypes = ['image/jpeg', 'image/png'];
        $imgDir = '/img/'.($subDir ? $subDir.'/' : '');
        $uploadDir = $_SERVER['DOCUMENT_ROOT'].$imgDir;

        if (! in_array($image['type'], $validTypes)) {
            throw new Exception('Invalid file type. Only JPEG and PNG are allowed.');
        }

        if (! file_exists($uploadDir)) {
            throw new Exception('Please ensure the target directory exists.');
        }

        $fileExtension = pathinfo($image['name'], PATHINFO_EXTENSION);
        $fileName = uniqid().'.'.$fileExtension; // Generate unique filename
        $uploadPath = $uploadDir.$fileName;

        if (! move_uploaded_file($image['tmp_name'], $uploadPath)) {
            throw new Exception('Error uploading file.');
        } else {
            return $imgDir.$fileName;
        }
    }

    /**
     * Attempts to delete an image from the project.
     *
     * @param  string  $imgPath  Relative path to the image file from the database.
     *                           for example, '/img/jazz/artists/artistPlaceholder.jpg'
     *
     * @throws Exception If the image cannot be deleted.
     */
    public function deleteImage(string $imgPath): void
    {
        if (! empty($imgPath)) {
            $imagePath = $_SERVER['DOCUMENT_ROOT'].$imgPath;
            if (file_exists($imagePath)) {
                $deleted = unlink($imagePath);
                if (! $deleted) {
                    throw new Exception("Failed to delete the image at: {$imgPath}.");
                }
            }
        } else {
            throw new Exception('No image path provided.');
        }
    }
}
