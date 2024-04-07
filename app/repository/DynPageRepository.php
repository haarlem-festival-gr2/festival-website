<?php

namespace Repository;

class DynPageRepository extends BaseRepository
{
    public function delete_page(int $id): bool
    {
        $query = $this->connection->prepare("DELETE FROM DynPages WHERE ID = ?");
        return $query->execute([$id]);
    }

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

    public function set_page_title(string $path, string $content, string $title): void
    {
        $query = $this->connection->prepare("INSERT INTO DynPages (Content, Path, Title) VALUES (?, ?, ?)
            ON DUPLICATE KEY UPDATE Content = VALUES(Content)");
        $query->execute([$content, $path, $title]);
    }

    public function set_page_id(string $path, string $content): void
    {
        $query = $this->connection->prepare("INSERT INTO DynPages (Content, Path) VALUES (?, ?) 
            ON DUPLICATE KEY UPDATE Content = VALUES(Content)");
        $query->execute([$content, $path]);
    }
}
