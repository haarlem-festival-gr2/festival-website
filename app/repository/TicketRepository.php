<?php

namespace Repository;

use Model\SoldTicket;
use PDO;

class TicketRepository extends BaseRepository
{
    public function get_from_uuid(string $uuid): SoldTicket
    {
        $query = $this->connection->prepare('
            SELECT * FROM Ticket as t 
            JOIN OrderItem as o ON o.ItemID = t.OrderItemID 
            WHERE t.TicketUUID = ?');

        $query->execute([$uuid]);

        $query->setFetchMode(PDO::FETCH_CLASS, '\Model\SoldTicket');

        if ($query->rowCount() === 0) {
            throw new \Exception('TICKET NOT FOUND');
        }

        return $query->fetch();
    }

    public function get_all(): array
    {
        $query = $this->connection->prepare('
            SELECT * FROM Ticket as t 
            JOIN OrderItem as o ON o.ItemID = t.OrderItemID');

        $query->execute();

        $query->setFetchMode(PDO::FETCH_CLASS, '\Model\SoldTicket');

        if ($query->rowCount() === 0) {
            throw new \Exception('TICKET NOT FOUND');
        }

        return $query->fetchAll();
    }

    public function mark_scanned(string $uuid): void
    {
        $query = $this->connection->prepare('
            UPDATE Ticket 
            SET IsScanned = 1 
            WHERE TicketUUID = ?');

        $query->execute([$uuid]);
    }
}
