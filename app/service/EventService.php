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
     * @param  array<string>  $filters
     */
    public function getEventsWithFilter(array $filters): array
    {
        $sqlFilter = [];

        if (in_array('History', $filters)) {
            $sqlFilter[] = $this->repository->get_history_query();
        }
        if (in_array('Jazz', $filters)) {
            $sqlFilter[] = $this->repository->get_jazz_query();
        }
        if (in_array('Yummy', $filters)) {
            $sqlFilter[] = $this->repository->get_yummy_query();
        }

        $events = $this->repository->get_events_with_filter($sqlFilter);
        if ($events === false) {
            return [];
        } else {
            return $events;
        }

    }
}
