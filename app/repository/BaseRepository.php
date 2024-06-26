<?php

namespace Repository;

use Exception;
use PDO;

abstract class BaseRepository
{
    protected PDO $connection;

    public function __construct()
    {
        $dsn = "mysql:host={$_ENV['PS_DB_HOST']};dbname={$_ENV['PS_DB_NAME']}";
        $pdo = new PDO($dsn, $_ENV['PS_DB_USERNAME'], $_ENV['PS_DB_PASSWORD']);
        $this->connection = $pdo;
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    /*
    * @param string $query
    * @param mixed $class [optional]
    */
    public function sql(string $query, mixed $class = null): mixed
    {
        switch (strtoupper(explode(' ', $query)[0])) {
            case 'SELECT':
                if ($class != null) {
                    return $this->connection->query($query, PDO::FETCH_CLASS, $class);
                } else {
                    return $this->connection->query($query);
                }
                break;
            default:
                return $this->connection->exec($query);
                break;
        }
    }

    /**
     * @param  callable(): mixed  $fn
     */
    public function transaction(callable $fn): mixed
    {
        $this->connection->beginTransaction();
        try {
            $ret = $fn([$this, 'sql']);
            $this->connection->commit();

            return $ret;
        } catch (Exception $e) {
            $this->connection->rollBack();
            echo $e->getMessage();

            return null;
        }
    }
}
