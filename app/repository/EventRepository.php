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
        $queryYummy = 'SELECT "YUMMY" as Type,
            s.SessionID as ID, r.PriceAdult as Price, s.RemainingSeats as TotalTickets, s.StartDateTime, s.EndDateTime,
            s.Description as Name, r.FoodImg1 as Img, r.Location as Venue
            FROM Session as s
            JOIN Restaurant as r ON s.RestaurantID = r.RestaurantID';

        return $queryYummy;
    }

    public function get_history_query(): string
    {
        $queryHistory = 'SELECT "HISTORY" as Type,
            t.TourID as ID, 0 as Price, t.RemainingTickets as TotalTickets, StartDateTime, EndDateTime,
            CONCAT(l.LanguageType, " ", t.Name) as Name,
            CASE
                WHEN l.LanguageType = "English" THEN "https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Flag_of_the_United_Kingdom_%281-2%29.svg/1920px-Flag_of_the_United_Kingdom_%281-2%29.svg.png"
                WHEN l.LanguageType = "Dutch" THEN "https://upload.wikimedia.org/wikipedia/commons/thumb/2/20/Flag_of_the_Netherlands.svg/1920px-Flag_of_the_Netherlands.svg.png"
                WHEN l.LanguageType = "Chinese" THEN "https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Flag_of_the_People%27s_Republic_of_China.svg/1920px-Flag_of_the_People%27s_Republic_of_China.svg.png"
                ELSE "not in the db yet"
            END as Img,
            "Church of St. Bavo" as Venue
            FROM HistoryTicket as t
            JOIN HistoryLanguageType as l ON t.LanguageID = l.LanguageID';

        return $queryHistory;
    }

    public function get_date_sql(int $date): string {
        return "StartDateTime >= '2024-7-$date 00:00:00' AND EndDateTime <= '2024-7-$date 23:59:59'";
    }

    /**
     * @param  array<string>  $events
     */
    public function get_events_with_filter(array $events, int $start, int $end): array|false
    {
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

        $finalDate = '';

        $dates = [];

        if (count($dates) == 0) {
            return false;
        }

        for ($i = 0; $i < count($dates); $i++) {
            $finalDate .= $dates[$i];
            if ($i + 1 < count($events)) {
                $finalDate .= ' AND ';
            }
        }


        $sql = "SELECT * FROM ($final) as Events 
                WHERE StartDateTime >= '2024-7-$start 00:00:00'
                AND EndDateTime <= '2024-7-$end 23:59:59'
                ORDER BY StartDateTime";

        $query = $this->connection->prepare($sql);
        $query->execute();

        $query->setFetchMode(PDO::FETCH_CLASS, '\Model\Event');

        return $query->fetchAll();
    }

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

// SELECT * FROM (SELECT 'Yummy' as Type, Name, StartDateTime FROM Session UNION ALL SELECT 'JAZZ' as Type, a.Name, p.StartDateTime FROM Performance AS p JOIN Artist AS a ON p.ArtistID = a.ArtistID JOIN JazzDay AS j ON p.DayID = j.DayID JOIN Venue AS v ON j.VenueID = v.VenueID) as Comb ORDER BY StartDateTime;
