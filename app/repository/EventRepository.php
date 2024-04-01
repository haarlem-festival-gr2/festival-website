<?php

namespace Repository;

use PDO;

class EventRepository extends BaseRepository
{
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

    public function get_yummy_query(): string
    {
        $queryYummyAdult = 'SELECT "YUMMY" as Type,
            s.SessionID as ID, r.PriceAdult as Price, s.RemainingSeats as TotalTickets, s.StartDateTime, s.EndDateTime,
            s.Description as Name, r.FoodImg1 as Img, r.Location as Venue
            FROM Session as s
            JOIN Restaurant as r ON s.RestaurantID = r.RestaurantID';

        $queryYummyChild = 'SELECT "YUMMY" as Type,
            s.SessionID as ID, r.PriceChild as Price, s.RemainingSeats as TotalTickets, s.StartDateTime, s.EndDateTime,
            CONCAT(s.Description, " - Child Ticket") as Name, r.FoodImg1 as Img, r.Location as Venue
            FROM Session as s
            JOIN Restaurant as r ON s.RestaurantID = r.RestaurantID';

        $queryYummy = "$queryYummyAdult UNION $queryYummyChild";

        return $queryYummy;
    }

    public function get_history_query(): string
    {
        $queryHistory = 'SELECT "HISTORY" as Type,
            t.TourID as ID, 0 as Price, t.RemainingTickets as TotalTickets, StartDateTime, EndDateTime,
            CONCAT(l.LanguageType, " ", t.Name) as Name,
            CASE
                WHEN l.LanguageType = "English" THEN "/img/flag/uk.png"
                WHEN l.LanguageType = "Dutch" THEN "/img/flag/nl.png"
                WHEN l.LanguageType = "Chinese" THEN "/img/flag/ch.png" ELSE "HTTP/1.1 404 Not Found" END as Img,
            "Church of St. Bavo" as Venue
            FROM HistoryTicket as t
            JOIN HistoryLanguageType as l ON t.LanguageID = l.LanguageID';

        return $queryHistory;
    }

    public function get_date_sql(): string {
        return "StartDateTime >= ? AND EndDateTime <= ?";
    }

    /**
     * @param  array<string>  $events
     * @param  array<int>  $dates
     */
    public function get_events_with_filter(array $events, array $dates, string $name): array|false
    {
        $name = "%$name%";
        if (count($events) == 0) {
            return false;
        }

        $final = '';
        for ($i = 0; $i < count($events); $i++) {
            $final .= $events[$i];
            if ($i + 1 < count($events)) {
                $final .= ' UNION ALL ';
            }
        }

        if (count($dates) == 0) {
            return false;
        }

        $finalDate = [];
        $dateValues = [$name];
        for ($i = 0; $i < count($dates); $i++) {
            $day = $dates[$i];
            $daySql = $this->get_date_sql();
            $finalDate[] = "($daySql)";
            // DANGER ZONE
            // DO NOT DIRECTLY INTERPOLATE STRINGS
            // (Danger mitigated on line 103)
            $dateValues[] = "2024-07-$day 00:00:00";
            $dateValues[] = "2024-07-$day 23:59:59";
        }

        // deal with the inconsistent naming or pay me 65 euro an hour
        //$dateValues[] = $name;

        $finalDateSql = implode(' OR ', $finalDate);
        $finalFilter = implode(' AND ', ['(Name = ?)', $finalDateSql]);

        // these need to be run a lot of times for each date
        $sql = "SELECT * FROM ($final) as Events 
                WHERE Name LIKE ? AND ($finalDateSql)
                ORDER BY StartDateTime";

        $query = $this->connection->prepare($sql);
        $query->execute($dateValues);

        $query->setFetchMode(PDO::FETCH_CLASS, '\Model\Event');

        return $query->fetchAll();
    }
}
