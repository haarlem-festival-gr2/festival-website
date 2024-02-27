<?php

namespace Repository;

class User
{
    public string $Name;

    public string $Role;
}

class UserRepository extends BaseRepository
{
    public function get_all(): mixed
    {
        return $this->transaction(function ($sql) {
            /*
            * @var \PDOStatement $res
            */
            $res = $sql('SELECT Name, Role FROM User', "\Repository\User");

            return $res->fetchAll();
        });
    }
}
