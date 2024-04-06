<?php

namespace Service;

use Model\SoldTicket;
use Repository\TicketRepository;

class SoldTicketService extends BaseService
{
    private TicketRepository $repository;

    public function __construct() {
        $this->repository = new TicketRepository();
    }

    public function getByUUID(string $uuid): SoldTicket {
        return $this->repository->get_from_uuid($uuid);
    }

    public function markScanned(SoldTicket $ticket): void {
        $this->repository->mark_scanned($ticket->TicketUUID);
    }

    public function getFiscalInfo(): array
    {
        $all = $this->repository->get_all();

        $result = [];
        
        foreach ($all as &$ticket) {
            $result[] = [
                'TicketUUID' => $ticket->TicketUUID,
                'CustomerID' => $ticket->CustomerName,
                'OrderItemID' => $ticket->OrderItemID,
                'EventName' => $ticket->EventName,
                'Cost' => $ticket->Price * $ticket->Quantity,
            ];
        }

        return $result;
    }
}
