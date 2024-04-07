<?php

namespace Repository;

use DateTime;
use DateTimeZone;
use Model\HistoryTicket;
use model\Order;
use Model\Payment;
use PDO;

require_once __DIR__.'/../repository/BaseRepository.php';

class PaymentRepository extends BaseRepository
{
    public function saveOrder(Order $order): void
    {
        $query = $this->connection->prepare('INSERT INTO `Order` (Status, TotalPrice, SessionID, UserID, DateTime) VALUES (?, ?, ?, ?, ?)');
        $query->execute([
            $order->getStatus(),
            $order->getTotalPrice(),
            $order->getSessionID(),
            $order->getUserID(),
            (new DateTime('now', new DateTimeZone('+0200')))->format('Y-m-d H:i:s'),
        ]);
    }

    private function getOrderUUID($sessionID): string
    {
        $query = $this->connection->prepare('SELECT OrderUUID FROM `Order` WHERE SessionID = ?');
        $query->execute([$sessionID]);

        return $query->fetchColumn();
    }

    public function saveOrderItems($orderItems, $sessionId): void
    {
        $orderUUID = ($this->getOrderUUID($sessionId));

        $query = $this->connection->prepare('INSERT INTO OrderItem (OrderID, EventName, StartDateTime, EndDateTime, Price, Quantity, Venue, CustomerName, EventID, Type, Note) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');

        foreach ($orderItems as $orderItem) {
            $query->execute([
                $orderUUID,
                $orderItem->getEventName(),
                $orderItem->getStartDateTime()->format('Y-m-d H:i:s'),
                $orderItem->getEndDateTime()->format('Y-m-d H:i:s'),
                $orderItem->getPrice(),
                $orderItem->getQuantity(),
                $orderItem->getVenue(),
                $orderItem->getCustomerName(),
                $orderItem->getEventID(),
                $orderItem->getType(),
                $orderItem->getNote(),
            ]);
        }
    }

    public function getOrderBySessionID($sessionID): ?Order
    {
        $query = $this->connection->prepare('SELECT * FROM `Order` WHERE SessionID = ?');
        $query->execute([$sessionID]);
        $query->setFetchMode(PDO::FETCH_CLASS, '\Model\Order');

        return $query->fetch();
    }

    public function updateOrderStatus($sessionID, $newStatus): bool
    {
        $query = $this->connection->prepare('UPDATE `Order` SET Status = ? WHERE SessionID = ?');

        return $query->execute([$newStatus, $sessionID]);
    }

    public function registerPayment(string $paymentDateTime, string $customerName, string $email, string $phoneNumber, string $paymentMethod, string $billingAddress, float $totalAmount, float $tax, string $currency, string $orderUUID): int
    {
        $sql = 'INSERT INTO Payment (PaymentDateTime, CustomerName, Email, PhoneNumber, PaymentMethod, BillingAddress, TotalAmount, Tax, Currency, OrderID, InvoiceDateTime) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $query = $this->connection->prepare($sql);
        $query->execute([
            $paymentDateTime,
            $customerName,
            $email,
            $phoneNumber,
            $paymentMethod,
            $billingAddress,
            $totalAmount,
            $tax,
            $currency,
            $orderUUID,
            (new DateTime('now', new DateTimeZone('+0200')))->format('Y-m-d H:i:s'),
        ]);

        return $this->connection->lastInsertId();
    }

    public function getPaymentById($id): Payment
    {
        $query = $this->connection->prepare('SELECT * FROM Payment WHERE InvoiceID = ?');
        $query->execute([$id]);
        $query->setFetchMode(PDO::FETCH_CLASS, '\Model\Payment');

        return $query->fetch();
    }

    public function getLineItemsByOrder(string $orderID): bool|array
    {
        $query = $this->connection->prepare('SELECT EventName, Quantity, Price FROM OrderItem WHERE OrderID = ?');
        $query->execute([$orderID]);
        $query->setFetchMode(PDO::FETCH_CLASS, '\Model\LineItem');

        return $query->fetchAll();
    }

    public function createTickets($tickets): void
    {
        $query = $this->connection->prepare('INSERT INTO Ticket (OrderItemID, IsScanned) VALUES (?, ?)');
        foreach ($tickets as $ticket) {
            $query->execute([$ticket['orderItemID'], $ticket['isScanned']]);
        }
    }

    public function getOrderItemsByOrderID(string $orderUUID): bool|array
    {
        $query = $this->connection->prepare('SELECT ItemID, EventName, StartDateTime, EndDateTime, Price, Quantity, Venue, CustomerName, EventID, Type , Note FROM OrderItem WHERE OrderID = ?');
        $query->execute([$orderUUID]);
        $query->setFetchMode(PDO::FETCH_CLASS, '\Model\OrderItem');

        return $query->fetchAll();
    }

    public function createTicket($OrderItemID, int $isScanned): void
    {
        $query = $this->connection->prepare('INSERT INTO Ticket (OrderItemID, IsScanned) VALUES (?, ?)');
        $query->execute([$OrderItemID, $isScanned]);
    }

    public function getTicketsWithDetails($orderID): bool|array
    {
        $query = $this->connection->prepare('SELECT t.TicketUUID, t.IsScanned, oi.EventName, oi.StartDateTime, oi.EndDateTime, oi.Price, oi.Venue, oi.CustomerName, oi.Note 
                                                    FROM Ticket t 
                                                    JOIN OrderItem oi ON t.OrderItemID = oi.ItemID 
                                                    JOIN `Order` o ON oi.OrderID = o.OrderUUID
                                                    WHERE o.OrderUUID = ?');
        $query->execute([$orderID]);
        $query->setFetchMode(PDO::FETCH_CLASS, '\Model\Ticket');

        return $query->fetchAll();
    }

    public function updateJazzTickets($id, $quantity): void
    {
        $query = $this->connection->prepare('UPDATE Performance SET AvailableTickets = AvailableTickets - ? WHERE PerformanceID = ?');
        $query->execute([$quantity, $id]);
    }

    public function updateJazzPasses($id, $quantity): void
    {
        $query = $this->connection->prepare('UPDATE JazzPass SET AvailableTickets = AvailableTickets - ? WHERE JazzPassID = ?');
        $query->execute([$quantity, $id]);
    }

    public function updateReservations($id, $quantity): void
    {
        $query = $this->connection->prepare('UPDATE Session SET RemainingSeats = RemainingSeats - ? WHERE SessionID = ?');
        $query->execute([$quantity, $id]);
    }

    public function updateHistoryTours($id, $quantity): void
    {
        $query = $this->connection->prepare('UPDATE HistoryTicket SET RemainingTickets = RemainingTickets - ? WHERE TourID = ?');
        $query->execute([$quantity, $id]);
    }

    public function updateFamilyTours($id, $quantity): void
    {
        $query = $this->connection->prepare('UPDATE HistoryTicket SET RemainingTickets = RemainingTickets - ? WHERE TourID = ?');
        $query->execute([$quantity * HistoryTicket::FAMILY_TICKET_SIZE, $id]);
    }
}
