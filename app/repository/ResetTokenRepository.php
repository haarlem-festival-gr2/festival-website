<?php

namespace Repository;

use Exception;
use PDO;

require_once __DIR__.'/../model/User.php';
require_once __DIR__.'/../repository/BaseRepository.php';

class ResetTokenRepository extends BaseRepository
{
    public function create_new_token(string $email): string|false
    {
        try {
            $query = $this->connection->prepare('INSERT INTO ResetToken (Email) VALUES (?) ON DUPLICATE KEY UPDATE Token = VALUES(Token), Time = VALUES(Time)');
            $query->execute([$email]);

            return $this->get_token($email);
        } catch (Exception $e) {
            return false;
        }
    }

    private function get_token(string $email): string|false
    {
        $query = $this->connection->prepare('SELECT Token FROM ResetToken WHERE Email = ? AND Time >= NOW() - INTERVAL 15 MINUTE');
        $query->execute([$email]);

        return $query->fetch(PDO::FETCH_ASSOC)['Token'];
    }

    public function verify_token(string $token): mixed
    {
        $query = $this->connection->prepare('SELECT Email FROM ResetToken WHERE Token = ?;');
        $query->execute([$token]);

        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function remove_token(string $email): void
    {
        $query = $this->connection->prepare('DELETE FROM ResetToken WHERE Email = ?');
        $query->execute([$email]);
    }
}
