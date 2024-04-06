<?php

namespace Model;

class SoldTicket extends BaseModel
{
    public string $TicketUUID;
    public int $IsScanned;
    public int $OrderItemID;
    public int $ItemID;
    public string $OrderID;
    public string $EventName;
    public string $Venue;
    public string $StartDateTime;
    public string $EndDateTime;
    public float $Price;
    public int $Quantity;
    public string $CustomerName; // pointless but whatever
    public string $EventID;
    public string $Type;
    public string $Note;
}
