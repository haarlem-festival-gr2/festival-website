<?php

namespace Repository;

use Model\Event;
use PDO;

class EventRepository extends BaseRepository
{
    /**
     * @return array<\Model\Event>|false
     */
    public function get_jazz_events(): array|false
    {
        $query = $this->connection->prepare("
            SELECT 'JAZZ' as Type,
            p.PerformanceID as ID, p.Price, p.TotalTickets, p.StartDateTime, p.EndDateTime,
            a.Name as Name, a.PerformanceImg as Img,
            v.Name as Venue
            FROM Performance AS p 
            JOIN Artist AS a ON p.ArtistID = a.ArtistID 
            JOIN JazzDay AS j ON p.DayID = j.DayID 
            JOIN Venue AS v ON j.VenueID = v.VenueID;");

        $query->execute();

        $query->setFetchMode(PDO::FETCH_CLASS, '\Model\Event');

        return $query->fetchAll();
    }
}
