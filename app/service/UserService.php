<?php

namespace Service;

use Model\User;
use Repository\UserRepository;

require_once __DIR__.'/../repository/UserRepository.php';
require_once __DIR__.'/../service/BaseService.php';
require_once __DIR__.'/../model/User.php';

class UserService extends BaseService
{
    private UserRepository $repository;

    public function __construct()
    {
        $this->repository = new UserRepository();
    }

    public function verifyUserCredentials(string $email, string $password): User|false
    {

        $user = $this->repository->get_with_cred($email);

        if ($user && $user->verifyPassword($password)) {
            return $user;
        }

        return false;

    }

    public function registerNewUser(string $email, string $password, string $hello): bool
    {

    }
}
