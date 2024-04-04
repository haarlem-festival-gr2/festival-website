<?php
require __DIR__ . '/../vendor/autoload.php';

use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;

// Create a new instance of QrCode
$qrCode = new QrCode('https://www.youtube.com/watch?v=q8uPqsslsvo&ab_channel=Dennis%27Video%27svoorinHolland');

$qrCode->setSize(300); 
$qrCode->setMargin(10); 

// Create a QR code writer instance
$writer = new PngWriter();

// Write the QR code to a file
$writer->write($qrCode)->saveToFile(__DIR__ . '/qr.png');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>QR Code</title>
    <style>

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        img {
            max-width: 100%;
            max-height: 100%;
        }
    </style>
</head>

<body>
    <img src="qr.png" alt="QR Code" style="width: 300px; height: 300px;">
</body>

</html>