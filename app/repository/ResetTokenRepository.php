<?php

namespace Repository;

use PDO;

require_once __DIR__.'/../model/User.php';
require_once __DIR__.'/../repository/BaseRepository.php';

class ResetTokenRepository extends BaseRepository
{
    public function create_new_token(string $email): bool
    {
        $query = $this->connection->prepare('INSERT INTO ResetToken (Email) VALUES (?)');
        $query->execute([$email]);
    }

    public function verify_token(string $token): mixed
    {
        $query = $this->connection->prepare('SELECT Email FROM ResetToken WHERE Token = ?;');
        $query->execute([$token]);

        return $query->fetch(PDO::FETCH_ASSOC);
    }
}
