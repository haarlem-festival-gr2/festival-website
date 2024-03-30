<?php

namespace Repository;

use DateTime;
use DateTimeZone;
use Model\Invoice;
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

    public function saveTickets($tickets, $sessionId): void
    {
        $orderUUID = ($this->getOrderBySessionID($sessionId))->getOrderUUID();

        $query = $this->connection->prepare('INSERT INTO Ticket (OrderID, EventName, StartDateTime, EndDateTime, Price, Quantity, IsScanned, Venue, CustomerName, timestamp) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');

        foreach ($tickets as $ticket) {
            $query->execute([
                $orderUUID,
                $ticket->getEventName(),
                $ticket->getStartDateTime()->format('Y-m-d H:i:s'),
                $ticket->getEndDateTime()->format('Y-m-d H:i:s'),
                $ticket->getPrice(),
                $ticket->getQuantity(),
                $ticket->getIsScanned() ? 1 : 0 ,
                $ticket->getVenue(),
                $ticket->getCustomerName(),
                (new DateTime('now', new DateTimeZone('+0100')))->format('Y-m-d H:i:s')
            ]);
        }
    }

    public function createInvoice(string $paymentDateTime, string $customerName, string $email, string $phoneNumber, string $paymentMethod, string $billingAddress, float $totalAmount, float $tax, string $currency, string $orderUUID): int
    {
        $sql = "INSERT INTO Invoice (PaymentDateTime, CustomerName, Email, PhoneNumber, PaymentMethod, BillingAddress, TotalAmount, Tax, Currency, OrderID, InvoiceDateTime) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
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

        return $invoiceId = $this->connection->lastInsertId();
    }

    public function getInvoiceById($invoiceId): Invoice
    {
        $query = $this->connection->prepare('SELECT * FROM Invoice WHERE InvoiceID = ?');
        $query->execute([$invoiceId]);
        $query->setFetchMode(PDO::FETCH_CLASS, '\Model\Invoice');

        return $query->fetch();
    }

    public function getLineItemsByOrder(string $orderUUID): bool|array
    {
        $query = $this->connection->prepare('SELECT EventName, Quantity, Price FROM Ticket WHERE OrderID = ?');
        $query->execute([$orderUUID]);
        $query->setFetchMode(PDO::FETCH_CLASS, '\Model\LineItem');

        return $query->fetchAll();
    }

    public function getTicketsByOrderID(string $orderUUID): bool|array
    {
        $query = $this->connection->prepare('SELECT TicketUUID, EventName, StartDateTime, EndDateTime, Price, Quantity, IsScanned, Venue, CustomerName FROM Ticket WHERE OrderID = ?');
        $query->execute([$orderUUID]);
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