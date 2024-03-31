<?php

namespace Service;

use Repository\EventRepository;

class EventService extends BaseService
{
    public EventRepository $repository;

    public function __construct()
    {
        $this->repository = new EventRepository();
    }

    /**
     * @param  array<mixed>  $filter
     * @return array<\Model\Event>
     */
    public function getEventsWithFilter(array $filter): array
    {
        $sqlEventFilter = [];

        $events = [];
        $dates = [];
        if (count($filter) >= 1) {
            $events = $filter[0];
        }

        if (count($filter) >= 2) {
            $dates = $filter[1];
        }

        if (in_array('History', $events)) {
            $sqlEventFilter[] = $this->repository->get_history_query();
        }
        if (in_array('Jazz', $events)) {
            $sqlEventFilter[] = $this->repository->get_jazz_query();
        }
        if (in_array('Yummy', $events)) {
            $sqlEventFilter[] = $this->repository->get_yummy_query();
        }

        foreach ($dates as $key => $value) {
            # code...
        }

        $events = $this->repository->get_events_with_filter($sqlEventFilter, 26, 26);
        if ($events === false) {
            return [];
        } else {
            return $events;
        }

    }
}
