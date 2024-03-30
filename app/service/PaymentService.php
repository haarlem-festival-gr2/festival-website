<?php

namespace Service;

use Model\Invoice;
use model\Order;
use Repository\PaymentRepository;

require_once __DIR__.'/../service/PDFGenerateService.php';
require_once __DIR__.'/../service/BaseService.php';
require_once __DIR__.'/../service/EmailService.php';

class PaymentService extends BaseService
{
    private PaymentRepository $repository;
    private PDFGenerateService $pdfService;
    private EmailService $emailService;

    public function __construct()
    {
        $this->repository = new PaymentRepository();
        $this->pdfService = new PDFGenerateService();
        $this->emailService = new EmailService();
    }

    public function saveOrder(Order $order): void
    {
        $this->repository->saveOrder($order);

        $this->repository->saveTickets($order->getTickets(), $order->getSessionID());
    }

    public function getOrderBySessionID(string $sessionID): ?Order
    {
        return $this->repository->getOrderBySessionID($sessionID);
    }

    public function updateOrderStatus(string $sessionID, string $newStatus): bool
    {
        return $this->repository->updateOrderStatus($sessionID, $newStatus);
    }

    ///////////////////////////////////////////
    public function get5events(): array|false
    {
        return $this->repository->get5events();
    }

    public function get3events(): array|false
    {
        return $this->repository->get3events();
    }
    ////////////////////////////////////////////////////////////////////////////////
    public function createInvoice(string $paymentDateTime, string $customerName, string $email, string $phoneNumber, string $paymentMethod, string $billingAddress, float $totalAmount, float $tax,string $currency, string $orderUUID): int
    {
        return $this->repository->createInvoice($paymentDateTime, $customerName, $email, $phoneNumber, $paymentMethod, $billingAddress, $totalAmount, $tax, $currency, $orderUUID);
    }

    public function sendInvoice(int $invoiceId): void
    {
        $invoice = $this->repository->getInvoiceById($invoiceId);
        $lineItems = $this->repository->getLineItemsByOrder($invoice->getOrderID());

        $pdf = $this->pdfService->generateInvoice($invoice, $lineItems);

        $this->emailService->sendEmail(EmailService::TYPE_INVOICE, $pdf, $invoice->getEmail(), $invoice->getCustomerName());
    }

    public function sendTickets(string $orderID, string $email, string $customerName): void
    {
        $tickets = $this->repository->getTicketsByOrderID($orderID);
        $pdf = $this->pdfService->generateTickets($tickets);

        $this->emailService->sendEmail(EmailService::TYPE_TICKET, $pdf, $email, $customerName);
    }
}


