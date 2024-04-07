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

    public function get_page_id(int $id): array|false
    {
        $query = $this->connection->prepare("SELECT * FROM DynPages WHERE ID = ?");
        $query->execute([$id]);
        $query->setFetchMode(\PDO::FETCH_ASSOC);
        return $query->fetch();
    }

    public function get_all_pages(): array|false
    {
        $query = $this->connection->prepare("SELECT * FROM DynPages");
        $query->execute();
        $query->setFetchMode(\PDO::FETCH_ASSOC);
        return $query->fetchAll();
    }

    public function set_page(string $path, string $content): void
    {
        $query = $this->connection->prepare("INSERT INTO DynPages (Content, Path) VALUES (?, ?) 
            ON DUPLICATE KEY UPDATE Content = VALUES(Content)");
        $query->execute([$content, $path]);
    }

    public function set_page_id(string $path, string $content): void
    {
        $query = $this->connection->prepare("INSERT INTO DynPages (Content, Path) VALUES (?, ?) 
            ON DUPLICATE KEY UPDATE Content = VALUES(Content)");
        $query->execute([$content, $path]);
    }
}
