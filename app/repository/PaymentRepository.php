<?php

namespace Repository;

use DateTime;
use DateTimeZone;
use Model\Payment;
use PDO;
use model\Order;

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
            (new DateTime('now', new DateTimeZone('+0100')))->format('Y-m-d H:i:s')
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
                $orderItem->getNote()
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
        $sql = "INSERT INTO Payment (PaymentDateTime, CustomerName, Email, PhoneNumber, PaymentMethod, BillingAddress, TotalAmount, Tax, Currency, OrderID, InvoiceDateTime) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
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
            (new DateTime('now', new DateTimeZone('+0100')))->format('Y-m-d H:i:s')
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
        $query = $this->connection->prepare("INSERT INTO Ticket (OrderItemID, IsScanned) VALUES (?, ?)");
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

//////////////////////////////////////////////////////////////////////////////////////////
    public function get_jazz_query(): string
    {
        $queryJazz = "SELECT 'JAZZ' as Type,
            p.PerformanceID as ID, p.Price, p.TotalTickets, p.StartDateTime, p.EndDateTime,
            a.Name as Name, a.PerformanceImg as Img,
            v.Name as Venue
            FROM Performance AS p 
            JOIN Artist AS a ON p.ArtistID = a.ArtistID 
            JOIN JazzDay AS j ON p.DayID = j.DayID 
            JOIN Venue AS v ON j.VenueID = v.VenueID";

        return $queryJazz;
    }

    public function get5events(): array|false
    {
        $queryJazz = $this->get_jazz_query(); // Modify this method to fetch only jazz events
        // Remove other queries since we only want jazz events

        // Concatenate the query and add LIMIT 5 to fetch only the first 5 rows
        $sql = "SELECT * FROM ($queryJazz) as Events ORDER BY StartDateTime LIMIT 5";

        $query = $this->connection->prepare($sql);
        $query->execute();

        $query->setFetchMode(PDO::FETCH_CLASS, '\Model\Event');

        return $query->fetchAll();
    }

    public function get3events(): array|false
    {
        $queryJazz = $this->get_jazz_query(); // Modify this method to fetch only jazz events
        // Remove other queries since we only want jazz events

        // Concatenate the query and add LIMIT 5 to fetch only the first 5 rows
        $sql = "SELECT * FROM ($queryJazz) as Events ORDER BY StartDateTime LIMIT 3";

        $query = $this->connection->prepare($sql);
        $query->execute();

        $query->setFetchMode(PDO::FETCH_CLASS, '\Model\Event');

        return $query->fetchAll();
    }
}