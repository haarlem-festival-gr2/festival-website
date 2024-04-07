<?php

namespace Repository;

use PDO;

class EventRepository extends BaseRepository
{
    public function get_jazz_query(): string
    {
        $queryJazzEvent = "SELECT 'JAZZ' as Type,
            p.PerformanceID as ID, p.Price, p.TotalTickets, p.StartDateTime, p.EndDateTime,
            a.Name as Name, a.PerformanceImg as Img,
            v.Name as Venue
            FROM Performance AS p 
            JOIN Artist AS a ON p.ArtistID = a.ArtistID 
            JOIN JazzDay AS j ON p.DayID = j.DayID 
            JOIN Venue AS v ON j.VenueID = v.VenueID";

        $queryDayPass = "SELECT 'DAY_JAZZ' as Type,
            JazzPassID as ID, Price, TotalTickets, StartDateTime, EndDateTime,
            'Jazz Day Pass' as Name, '/img/jazz/daypass.png' as Img,
            'Patronaat' as Venue
            FROM JazzPass";

        $queryJazz = "$queryJazzEvent UNION $queryDayPass";

        return $queryJazz;
    }

    public function get_yummy_query(): string
    {
        $queryYummyAdult = 'SELECT "YUMMY" as Type,
            s.SessionID as ID, 10 as Price, s.RemainingSeats as TotalTickets, s.StartDateTime, s.EndDateTime,
            CONCAT(s.Description, " (Reservation)") as Name, r.FoodImg1 as Img, r.Location as Venue
            FROM Session as s
            JOIN Restaurant as r ON s.RestaurantID = r.RestaurantID';

        $queryYummy = "$queryYummyAdult";

        return $queryYummy;
    }

    public function get_history_query(): string
    {
        $queryHistorySingle = 'SELECT "HISTORY" as Type,
            t.TourID as ID, 17.5 as Price, t.RemainingTickets as TotalTickets, StartDateTime, EndDateTime,
            CONCAT(l.LanguageType, " ", t.Name) as Name,
            CASE
                WHEN l.LanguageType = "English" THEN "/img/flag/uk.png"
                WHEN l.LanguageType = "Dutch" THEN "/img/flag/nl.png"
                WHEN l.LanguageType = "Chinese" THEN "/img/flag/ch.png" ELSE "HTTP/1.1 404 Not Found" END as Img,
            "Church of St. Bavo" as Venue
            FROM HistoryTicket as t
            JOIN HistoryLanguageType as l ON t.LanguageID = l.LanguageID';

        $queryHistoryFour = 'SELECT "FAM_HISTORY" as Type,
            t.TourID as ID, 60 as Price, t.RemainingTickets as TotalTickets, StartDateTime, EndDateTime,
            CONCAT(l.LanguageType, " ", t.Name, " - x4 (Family) Package") as Name,
            CASE
                WHEN l.LanguageType = "English" THEN "/img/flag/uk.png"
                WHEN l.LanguageType = "Dutch" THEN "/img/flag/nl.png"
                WHEN l.LanguageType = "Chinese" THEN "/img/flag/ch.png" ELSE "HTTP/1.1 404 Not Found" END as Img,
            "Church of St. Bavo" as Venue
            FROM HistoryTicket as t
            JOIN HistoryLanguageType as l ON t.LanguageID = l.LanguageID';

        return "$queryHistorySingle UNION $queryHistoryFour";
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
        $values = [$name];
        for ($i = 0; $i < count($dates); $i++) {
            $day = $dates[$i];
            $daySql = $this->get_date_sql();
            $finalDate[] = "($daySql)";
            // DANGER ZONE
            // DO NOT DIRECTLY INTERPOLATE STRINGS
            // (Danger mitigated on line 103)
            $values[] = "2024-07-$day 00:00:00";
            $values[] = "2024-07-$day 23:59:59";
        }

        $finalDateSql = implode(' OR ', $finalDate);
        $finalFilter = implode(' AND ', ['(Name = ?)', $finalDateSql]);

        // these need to be run a lot of times for each date
        $sql = "SELECT * FROM ($final) as Events 
                WHERE Name LIKE ? AND ($finalDateSql)
                ORDER BY StartDateTime";

        $query = $this->connection->prepare($sql);
        $query->execute($values);

        $query->setFetchMode(PDO::FETCH_CLASS, '\Model\Event');

        return $query->fetchAll();
    }
}
