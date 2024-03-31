<?php

namespace Repository;

use PDO;

class ScannerRepository extends BaseRepository
{
    public function get_from_uuid(string $uuid): array
    {
        $query = $this->connection->prepare('
            SELECT * FROM Ticket as t 
            JOIN OrderItem as o ON o.ItemID = t.OrderItemID 
            WHERE t.TicketUUID = ?');

        $query->execute([$uuid]);

        $query->setFetchMode(PDO::FETCH_ASSOC);

        if ($query->rowCount() === 0) {
            throw new \Exception('TICKET NOT FOUND');
        }

        return $query->fetch();
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
