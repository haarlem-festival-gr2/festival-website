<?php

namespace Repository;

require_once __DIR__.'/../model/User.php';
require_once __DIR__.'/../repository/BaseRepository.php';

class UserRepository extends BaseRepository
{
    public function get_all(): mixed
    {
        return $this->transaction(function ($sql) {
            /*
            * @var \PDOStatement $res
            */
            $res = $sql('SELECT Name, Role FROM User', "\Model\User");

            return $res->fetchAll();
        });
    }

    public function get_with_cred(string $email): \Model\User|false
    {
        // TODO: Make fetch easier. mb a graphql type API
        $query = $this->connection->prepare('SELECT Name, Role, PasswordHash FROM User WHERE Email = ?;');
        $query->execute([$email]);

        $query->setFetchMode(\PDO::FETCH_CLASS, "\Model\User");
        $res = $query->fetch();

        return $res;
    }
}
