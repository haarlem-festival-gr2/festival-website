<?php

namespace Service;

use Endroid\QrCode\Label\Label;
use Endroid\QrCode\QrCode;
use Endroid;
use Endroid\QrCode\Writer\PngWriter;
use Repository\CheckTicketRepository;

class QRCodeService
{
    public function generateQRCode($ticketUUID): string
    {
        $qr_code = QrCode::create($ticketUUID)->setSize(300)->setMargin(40);
        $label = Label::create("Ticket QR Code");
        $writer = new PngWriter();
        $result = $writer->write($qr_code, label: $label);
        return $result->getString();
    }

    public function checkTicket($ticketUUID): bool
    {
        $checkTicketRepository = new CheckTicketRepository();
        try {
            return $checkTicketRepository->checkTicket($ticketUUID);
        } catch (\Exception $e) {
            throw $e;
        }
        // if true - ticket is valid
    }
}