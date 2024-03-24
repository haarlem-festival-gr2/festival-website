<?php

namespace Service;

use Repository\EventRepository;
use Model\Event;

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
    public function getJazzEvents(): array
    {
        $events = $this->repository->get_jazz_events();
        if ($events === false) {
            return [];
        } else {
            return $events;
        }
    }
}
