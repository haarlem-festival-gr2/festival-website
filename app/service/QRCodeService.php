<?php

namespace Service;

use Endroid\QrCode\Label\Label;
use Endroid\QrCode\QrCode;
use Endroid;
use Endroid\QrCode\Writer\PngWriter;
use model\Ticket;

class QRCodeService
{

    public function generateQRCode($id)
    {
        $qr_code = QrCode::create($id)->setSize(300)->setMargin(40);
        $label = Label::create("Label");
        $writer = new PngWriter();
        $result = $writer->write($qr_code, label: $label);

        $result->saveToFile("code.png");

    }

}