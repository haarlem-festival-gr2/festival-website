<?php

namespace Service;

use Model\Payment;
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

        $this->repository->saveOrderItems($order->getOrderItems(), $order->getSessionID());
    }

    public function getOrderBySessionID(string $sessionID): ?Order
    {
        return $this->repository->getOrderBySessionID($sessionID);
    }

    public function updateOrderStatus(string $sessionID, string $newStatus): bool
    {
        return $this->repository->updateOrderStatus($sessionID, $newStatus);
    }

    public function registerPayment(string $paymentDateTime, string $customerName, string $email, string $phoneNumber, string $paymentMethod, string $billingAddress, float $totalAmount, float $tax,string $currency, string $orderUUID): int
    {
        return $this->repository->registerPayment($paymentDateTime, $customerName, $email, $phoneNumber, $paymentMethod, $billingAddress, $totalAmount, $tax, $currency, $orderUUID);
    }

    public function sendInvoice(int $id): void
    {
        $payment = $this->repository->getPaymentById($id);
        $lineItems = $this->repository->getLineItemsByOrder($payment->getOrderID());

        $pdf = $this->pdfService->generateInvoice($payment, $lineItems);

        $this->emailService->sendEmail(EmailService::TYPE_INVOICE, $pdf, $payment->getEmail(), $payment->getCustomerName());
    }

    public function sendTickets(string $orderID, string $email, string $customerName): void
    {
        $this->createTickets($orderID);
        $tickets = $this->repository->getTicketsWithDetails($orderID);

        $pdf = $this->pdfService->generateTickets($tickets);

        $this->emailService->sendEmail(EmailService::TYPE_TICKET, $pdf, $email, $customerName);
    }

    public function createTickets(string $orderId): void
    {
        $orderItems = $this->repository->getOrderItemsByOrderID($orderId);
        foreach ($orderItems as $orderItem) {
            for ($i = 0; $i < $orderItem->getQuantity(); $i++) {
                $this->repository->createTicket($orderItem->getOrderItemID(), 0);
            }
        }
    }

    public function updateTicketsAvailability(string $orderId): void
    {
        $orderItems = $this->repository->getOrderItemsByOrderID($orderId);

        foreach($orderItems as $orderItem){
            switch($orderItem->getType()){
                case 'JAZZ':
                    $this->repository->updateJazzTickets($orderItem->getEventIDInt(), $orderItem->getQuantity());
                    break;
                case 'DAY_JAZZ':
                    $this->repository->updateJazzPasses($orderItem->getEventIDInt(), $orderItem->getQuantity());
                    break;
                case 'YUMMY':
                    $this->repository->updateReservations($orderItem->getEventIDInt(), $orderItem->getQuantity());
                    break;
                case 'HISTORY':
                    $this->repository->updateHistoryTours($orderItem->getEventIDInt(), $orderItem->getQuantity());
                    break;
                case 'FAM_HISTORY':
                    $this->repository->updateFamilyTours($orderItem->getEventIDInt(), $orderItem->getQuantity());
                    break;
            }
        }
    }
}


