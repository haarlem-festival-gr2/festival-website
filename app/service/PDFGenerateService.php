<?php

namespace Service;

use Model\Invoice;
use TCPDF;

class PDFGenerateService
{
    public function generateInvoice(Invoice $invoice, array $lineItems): string
    {
        $pdf = new TCPDF();
        $pdf->SetCreator('Haarlem Festival');
        $pdf->SetAuthor('Haarlem Festival');
        $pdf->SetTitle('Haarlem Festival Invoice');
        $pdf->SetSubject('Your Invoice');
        $pdf->AddPage();

        $htmlContent = '<h1>Invoice Details</h1>';
        $htmlContent .= "<p><strong>Invoice Number:</strong> {$invoice->getInvoiceID()}</p>";
        $htmlContent .= "<p><strong>Invoice Date and Time:</strong> {$invoice->getInvoiceDateTime()}</p>";
        $htmlContent .= "<p><strong>Name:</strong> {$invoice->getCustomerName()}</p>";
        $htmlContent .= "<p><strong>Email:</strong> {$invoice->getEmail()}</p>";
        $htmlContent .= "<p><strong>Phone Number:</strong> {$invoice->getPhoneNumber()}</p>";
        $htmlContent .= "<p><strong>Payment Date and Time:</strong> {$invoice->getPaymentDateTime()}</p>";
        $htmlContent .= "<p><strong>Payment Method:</strong> {$invoice->getPaymentMethod()}</p>";
        $htmlContent .= "<p><strong>Billing Address:</strong> {$invoice->getBillingAddress()}</p>";
        $htmlContent .= "<p><strong>Total Amount:</strong> {$invoice->getCurrency()} {$invoice->getTotalAmount()}</p>";
        $htmlContent .= "<p><strong>Tax (included):</strong> {$invoice->getCurrency()} {$invoice->getTotalAmount()} </p>";

        $htmlContent .= '<h2>Tickets:</h2>';
        $htmlContent .= '<table><tr><th>Event</th><th>Quantity</th><th>Price</th></tr>';

        foreach ($lineItems as $item) {
            $htmlContent .= "<tr>
                            <td>{$item->getEventName()}</td>
                            <td>{$item->getQuantity()}</td>
                            <td>{$invoice->getCurrency()} {$item->getPrice()}</td>
                         </tr>";
        }
        $htmlContent .= '</table>';

        $pdf->writeHTML($htmlContent, true, false, true, false, '');

        return $pdf->Output('', 'S');
    }

    public function generateTickets(array $tickets): string {
        $pdf = new TCPDF();
        $pdf->SetCreator('Event Organizer');
        $pdf->SetAuthor('Event Organizer');
        $pdf->SetTitle('Tickets');
        $pdf->SetSubject('Your Event Tickets');
        $pdf->AddPage();

        foreach ($tickets as $ticket) {
            $htmlContent = "<div style='border: 1px solid black; padding: 10px; margin-bottom: 10px;'>
                        <h2>{$ticket->getEventName()}</h2>
                        <p>Venue: {$ticket->getVenue()}</p>
                        <p>Date and Time: {$ticket->getStartDateTime()->format('Y-m-d H:i')} to {$ticket->getEndDateTime()->format('Y-m-d H:i')}</p>
                        <p>Name: {$ticket->getCustomerName()}</p>
                    </div>";

            $pdf->writeHTML($htmlContent, true, false, true, false, '');
        }


        return $pdf->Output('', 'S');
    }

    public function qrcode()
    {
        for ($i = 0; $i < $ticket->getQuantity(); $i++) {
            // Generate a unique QR code for each ticket/quantity
            $qrContent = $ticket->getTicketUUID() . '#' . uniqid();
            $qrCode = new \Endroid\QrCode\QrCode($qrContent);
            $qrCode->setSize(300);

            $qrCodeTempPath = sys_get_temp_dir() . '/' . uniqid() . '.png';
            $writer = new \Endroid\QrCode\Writer\PngWriter();
            $writer->write($qrCode)->saveToFile($qrCodeTempPath);

            // Add ticket info and QR code to the PDF
            $htmlContent = "<h2>{$ticket->getEventName()}</h2>
                            <p>Venue: {$ticket->getVenue()}</p>
                            <p>Date/Time: {$ticket->getStartDateTime()->format('Y-m-d H:i')} to {$ticket->getEndDateTime()->format('Y-m-d H:i')}</p>
                            <p>Price: {$ticket->Price}</p>
                            <p>Customer: {$ticket->CustomerName}</p>";

            $pdf->writeHTML($htmlContent, true, false, true, false, '');
            $pdf->Image($qrCodeTempPath, '', '', 40, 40, 'PNG');

            // Optionally, add a page break between tickets
            if ($i < $ticket->Quantity - 1 || next($tickets) !== false) {
                $pdf->AddPage();
            }

            // Clean up the temporary file
            unlink($qrCodeTempPath);
        }
    }



    public function generatePDF(string $title, string $subject, Invoice $invoice, $lineItems): void
    {
        $pdf = new TCPDF();
        $pdf->SetCreator('Haarlem Festival');
        $pdf->SetAuthor('Haarlem Festival');
        $pdf->SetTitle($title);
        $pdf->SetSubject($subject);
        $pdf->AddPage();

        // add another service class

        $htmlContent = '
        <h1>Welcome to TCPDF!</h1>
        <p>This is a basic example of TCPDF library.</p>
        <ul>
            <li>Easy to use</li>
            <li>Support for HTML formatting</li>
            <li>Supports images and different fonts</li>
            <p> Mariiiia </p>
        </ul>';
        $pdf->writeHTML($htmlContent, true, false, true, false, '');

        // edit
        $pdfFilePath = $_SERVER['DOCUMENT_ROOT']  . '/example_001.pdf';  // Adjust the path as needed
        $pdf->Output($pdfFilePath, 'F'); // ??



        $this->sendEmail($pdfFilePath);
// Optional: Delete the PDF file if it's no longer needed
        unlink($pdfFilePath);

    }
}