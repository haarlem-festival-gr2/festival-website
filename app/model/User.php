<?php

namespace Model;

require_once __DIR__.'/../model/BaseModel.php';

class User extends BaseModel
{
    private int $UserID;

    public string $Name;

    public string $Role;

    public string $Email;

    public string $Username;

    private string $PasswordHash;

    public function verifyPassword(string $password): bool
    {
        return password_verify($password, $this->PasswordHash);
    }

    public function getId() : int
    {
        return $this->UserID;
    }
}
