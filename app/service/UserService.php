<?php

namespace Service;

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

    public function verifyUserCredentials(string $email, string $password): bool
    {

        $user = $this->repository->get_with_cred($email);

        if ($user) {
            return $user->verifyPassword($password);
        }

        return false;
    }
}
