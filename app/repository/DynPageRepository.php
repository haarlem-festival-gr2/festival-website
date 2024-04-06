<?php

namespace Repository;

class DynPageRepository extends BaseRepository
{
    public function get_page(string $path): array|false
    {
        $query = $this->connection->prepare("SELECT * FROM DynPages WHERE Path = ?");
        $query->execute([$path]);
        $query->setFetchMode(\PDO::FETCH_ASSOC);
        return $query->fetch();
    }
}
