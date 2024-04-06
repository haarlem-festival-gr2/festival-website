<?php

namespace Repository;

use Exception;
use PDO;

class CheckTicketRepository extends BaseRepository
{
    public function checkTicket($ticketUUID): bool
    {
        $query = $this->connection->prepare('SELECT TicketUUID, IsScanned FROM Ticket WHERE TicketUUID = :ticketUUID');
        $query->execute(['ticketUUID' => $ticketUUID]);

        // Fetch the result as an associative array
        $ticket = $query->fetch(PDO::FETCH_ASSOC);

        // Check if the ticket exists by checking if $ticket is not false
        if (!$ticket) {
            // Ticket does not exist
            throw new Exception("Ticket does not exist.");
        } elseif ($ticket['IsScanned'] == 1) {
            // Ticket exists but has already been scanned
            throw new Exception("Ticket has already been scanned.");
        } else {
            // If the ticket exists and has not been scanned, update it as scanned
            $this->updateTicket($ticketUUID);
            return true; // Ticket was successfully checked and marked as scanned
        }
    }

    private function updateTicket($ticketUUID): void
    {
        $query = $this->connection->prepare("UPDATE Ticket SET IsScanned = 1 WHERE TicketUUID = :ticketUUID");
        $query->execute(['ticketUUID' => $ticketUUID]);
    }
}