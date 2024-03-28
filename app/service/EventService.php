<?php

namespace Service;

use Model\Event;
use Repository\EventRepository;

class EventService extends BaseService
{
    public EventRepository $repository;

    public function __construct()
    {
        $this->repository = new EventRepository();
    }

    /**
     * @return array<Event>
     */
    public function getAllEvents(): array
    {
        $events = $this->repository->get_all_events();
        if ($events === false) {
            return [];
        } else {
            return $events;
        }
    }

    /**
     * @param  array<string>  $events
     * @return array<\Model\Event>
     */
    public function getEventsWithFilter(array $events): array
    {
        $sqlFilter = [];

        if (in_array('History', $events)) {
            $sqlFilter[] = $this->repository->get_history_query();
        }
        if (in_array('Jazz', $events)) {
            $sqlFilter[] = $this->repository->get_jazz_query();
        }
        if (in_array('Yummy', $events)) {
            $sqlFilter[] = $this->repository->get_yummy_query();
        }

        $events = $this->repository->get_events_with_filter($sqlFilter, 26, 26);
        if ($events === false) {
            return [];
        } else {
            return $events;
        }

    }
}
