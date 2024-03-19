<?php

namespace Service;

use Core\Route\Route;
use Model\User;
use Repository\ResetTokenRepository;
use Repository\UserRepository;

require_once __DIR__ . '/../repository/UserRepository.php';
require_once __DIR__ . '/../repository/ResetTokenRepository.php';
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

    private ResetTokenRepository $resetTokenRepository;

    public function __construct()
    {
        $this->repository = new UserRepository();
        $this->resetTokenRepository = new ResetTokenRepository();
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

        if ($password == '' || $username == '' || $name == '') {
            return UserServiceError::ERR_USER_IS_A_TEAPOT; // for editing my html client side
        }

        try {
            $this->repository->create_new_user($email, $password, $username, $name);
        } catch (\Exception $e) {
            return UserServiceError::ERR_USER_EXISTS;
        }

        return $this->repository->get_with_cred($email);
    }

    public function sendRecoveryEmail(string $email): void
    {
        $user = $this->repository->get_with_cred($email);

        if (!$user) {
            return; // exit
        }

        $curl = curl_init('https://api.resend.com/emails');

        $data = [
            'from' => 'Password Reset <no_reply@ishitmypants.zip>',
            'to' => $email,
            'subject' => 'Password reset - Haarlem Festival/Tourism',
            'html' => Route::template('login.reset_email', ['name' => $user->Name]),
        ];

        $payload = json_encode($data);

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLINFO_HEADER_OUT, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($curl, CURLOPT_HTTPHEADER, [
            'Authorization: Bearer ' . getenv('RESEND_API'),
            'Content-Type: application/json',
        ]);

        $res = curl_exec($curl);

        if ($res) {

        } else {
        }
    }


    public function deleteUser($userId)
    {
        $this->repository->deleteUser($userId);
        exit();
    }
}


