<?php

namespace Repository;

require_once __DIR__.'/../model/User.php';
require_once __DIR__.'/../repository/BaseRepository.php';

class UserRepository extends BaseRepository
{
    public function get_with_cred(string $email): \Model\User|false
    {
        // TODO: Make fetch easier. mb a graphql type API
        $query = $this->connection->prepare('SELECT UserID, Name, Role, PasswordHash FROM User WHERE Email = ?;');
        $query->execute([$email]);

        $query->setFetchMode(\PDO::FETCH_CLASS, "\Model\User");
        $res = $query->fetch();

        return $res;
    }

    public function create_new_user(string $email, string $password, string $username, string $name): void
    {
        $query = $this->connection->prepare('INSERT INTO User (Email, PasswordHash, Username, Name, Role) VALUES (?,?,?,?,\'user\')');
        $query->execute([$email, $password, $username, $name]);
    }

    public function set_new_password(string $email, string $password): void
    {
        $query = $this->connection->prepare('UPDATE User SET PasswordHash = ? WHERE Email = ?');
        $query->execute([$password, $email]);
    }
}
