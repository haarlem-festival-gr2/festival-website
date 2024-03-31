<?php

namespace Service;

use Model\Payment;
use TCPDF;

class PDFGenerateService
{
    private function initializePDF($pdf, string $title, string $subject): void {
        $pdf->SetCreator('Haarlem Festival');
        $pdf->SetAuthor('Haarlem Festival');
        $pdf->SetTitle($title);
        $pdf->SetSubject($subject);
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
        $pdf->AddPage();
    }

    public function generateInvoice(Payment $payment, array $lineItems): string
    {
        $pdf = new TCPDF();
        $this->initializePDF($pdf, 'Haarlem Festival Invoice', 'Your Invoice');

        $htmlContent = $this->generateHTMLForInvoice($payment, $lineItems);

        $pdf->writeHTML($htmlContent, true, false, true, false, '');
        return $pdf->Output('', 'S');
    }

    private function generateHTMLForInvoice(Payment $payment, array $lineItems): string
    {
        $htmlContent = '<h1>Payment Details</h1>';
        $htmlContent .= "<p><strong>Invoice Number:</strong> {$payment->getInvoiceID()}</p>";
        $htmlContent .= "<p><strong>Invoice Date and Time:</strong> {$payment->getInvoiceDateTime()}</p>";
        $htmlContent .= "<p><strong>Name:</strong> {$payment->getCustomerName()}</p>";
        $htmlContent .= "<p><strong>Email:</strong> {$payment->getEmail()}</p>";
        $htmlContent .= "<p><strong>Phone Number:</strong> {$payment->getPhoneNumber()}</p>";
        $htmlContent .= "<p><strong>Payment Date and Time:</strong> {$payment->getPaymentDateTime()}</p>";
        $htmlContent .= "<p><strong>Payment Method:</strong> {$payment->getPaymentMethod()}</p>";
        $htmlContent .= "<p><strong>Billing Address:</strong> {$payment->getBillingAddress()}</p>";
        $htmlContent .= "<p><strong>Total Amount:</strong> {$payment->getCurrency()} {$payment->getTotalAmount()}</p>";
        $htmlContent .= "<p><strong>Tax (included):</strong> {$payment->getCurrency()} {$payment->getTotalAmount()} </p>";

        $htmlContent .= '<h2>Tickets:</h2>';
        $htmlContent .= '<table><tr><th>Event</th><th>Quantity</th><th>Price</th></tr>';

        foreach ($lineItems as $item) {
            $htmlContent .= "<tr>
                            <td>{$item->getEventName()}</td>
                            <td>{$item->getQuantity()}</td>
                            <td>{$payment->getCurrency()} {$item->getPrice()}</td>
                         </tr>";
        }
        $htmlContent .= '</table>';
        return $htmlContent;
    }

    public function generateTickets(array $tickets): string {
        $pdf = new TCPDF();
        $this->initializePDF($pdf, 'Haarlem Festival Tickets', 'Your Tickets');

        foreach ($tickets as $ticket) {
            $htmlContent = $this->generateHTMLForTicket($ticket);
            $pdf->writeHTML($htmlContent, true, false, true, false, '');

            $qrCodeService = new QRCodeService();
            $qrImageString = $qrCodeService->generateQRCode($ticket->getTicketUUID());

            $pdf->Image('@' . $qrImageString, 150, $pdf->GetY() - 55, 50, 0, 'PNG', '', '', false, 300, '', false, false, 0, false, false, false);
            $pdf->SetY($pdf->GetY() + 25);
        }
        return $pdf->Output('', 'S');
    }

    public function generateHTMLForTicket($ticket): string
    {
        $htmlContent = "<div style='border: 1px solid black; padding: 10px; margin-bottom: 10px;'>
                        <h2>{$ticket->getEventName()}</h2>
                        <p>Venue: {$ticket->getVenue()}</p>
                        <p>Date and Time: {$ticket->getStartDateTime()->format('Y-m-d H:i')} to {$ticket->getEndDateTime()->format('Y-m-d H:i')}</p>
                        <p>Name: {$ticket->getCustomerName()}</p>
                        <p>Additional Info: {$ticket->getNote()} </p>
                        </div>";
        return $htmlContent;
    }
}