<?php

namespace repository;

require_once __DIR__.'/../model/FestivalEvent.php';
require_once __DIR__.'/../repository/BaseRepository.php';

class FestivalEventRepository extends BaseRepository
{
    public function getFestivalEventByName(string $name): mixed
    {
        $query = $this->connection->prepare('SELECT FestivalEventID, Name, Description, ImgPath, StartDate, EndDate, Title FROM FestivalEvent WHERE Name = ?');
        $query->execute([$name]);

        $query->setFetchMode(\PDO::FETCH_CLASS, "\model\FestivalEvent");

        return $query->fetch();
    }
}
