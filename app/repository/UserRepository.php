<?php

namespace Repository;

require_once __DIR__.'/../model/User.php';
require_once __DIR__.'/../repository/BaseRepository.php';

use Model\User;

class UserRepository extends BaseRepository
{
    public function get_with_cred(string $email): \Model\User|false
    {
        $query = $this->connection->prepare('SELECT UserID, Name, Role, PasswordHash, Email, Username FROM User WHERE Email = ?;');
        $query->execute([$email]);

        $query->setFetchMode(\PDO::FETCH_CLASS, "\Model\User");
        $res = $query->fetch();

        return $res;
    }

    public function create_new_user(string $email, string $password, string $username, string $name, string $role = 'user'): void
    {
        $query = $this->connection->prepare('INSERT INTO User (Email, PasswordHash, Username, Name, Role) VALUES (?,?,?,?,?)');
        $query->execute([$email, $password, $username, $name, $role]);
    }

    /**
     * @return array<User>
     */
    public function getAllUsers(?string $filter = null): array
    {
        $query = 'SELECT UserID, Email, Username, Name, Role, RegistrationDate FROM User';

        if ($filter !== null) {
            $query .= ' WHERE Role = :filter OR Name = :filter OR Username = :filter OR UserID = :filter';
        }

        $statement = $this->connection->prepare($query);

        if ($filter !== null) {
            $statement->bindParam(':filter', $filter);
        }

        $statement->execute();

        return $statement->fetchAll(\PDO::FETCH_CLASS, "\Model\User");
    }

    public function getUserById(int $userId): \Model\User|false
    {
        $query = $this->connection->prepare('SELECT UserID, Email, Username, Name, Role, RegistrationDate FROM User WHERE UserID = ?;');
        $query->execute([$userId]);
        $query->setFetchMode(\PDO::FETCH_CLASS, "\Model\User");
        $user = $query->fetch();

        return $user;
    }

    public function updateUser(int $userId, string $email, string $username, string $name, string $role): void
    {
        $query = $this->connection->prepare('UPDATE User SET Email = ?, Username = ?, Name = ?, Role = ? WHERE UserID = ?');
        $query->execute([$email, $username, $name, $role, $userId]);
    }

    public function deleteUser(int $userId): void
    {
        $query = $this->connection->prepare('DELETE FROM User WHERE UserID = ?');
        $query->execute([$userId]);
    }

    public function set_new_password(string $email, string $password): void
    {
        $query = $this->connection->prepare('UPDATE User SET PasswordHash = ? WHERE Email = ?');
        $query->execute([$password, $email]);
    }

    public function update_user(User $user): void
    {
        $query = $this->connection->prepare('UPDATE User SET Email = ?, Name = ?, Username = ?, Role = ? WHERE UserID = ?');
        $query->execute([$user->Email, $user->Name, $user->Username, $user->Role, $user->getId()]);
    }
}
