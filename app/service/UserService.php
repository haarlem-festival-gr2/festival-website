<?php

namespace Service;

use Model\User;
use Repository\UserRepository;

require_once __DIR__ . '/../repository/UserRepository.php';
require_once __DIR__ . '/../service/BaseService.php';
require_once __DIR__ . '/../model/User.php';

enum UserServiceError: int
{
    case ERR_USER_EXISTS = 1;
    case ERR_USER_IS_A_TEAPOT = 2;
    case INVALID_EMAIL = 3;
}

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

    public function registerNewUser(string $email, string $password, string $username, string $name): UserServiceError|User
    {
        if (!verifyEmail($email)) {
            return UserServiceError::INVALID_EMAIL;
        }

        if ($password == '' || $username == '' || $name = '') {
            return UserServiceError::ERR_USER_IS_A_TEAPOT; // for editing my html client side
        }

        try {
            $this->repository->create_new_user($email, $password, $username, $name);
        } catch (\Exception $e) {
            return UserServiceError::ERR_USER_EXISTS;
        }

        return $this->repository->get_with_cred($email);
    }
}


