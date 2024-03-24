<?php

namespace Service;

use Core\Route\Route;
use Repository\ResetTokenRepository;
use Repository\UserRepository;

require_once __DIR__.'/../repository/ResetTokenRepository.php';
require_once __DIR__.'/../repository/UserRepository.php';
require_once __DIR__.'/../service/BaseService.php';
require_once __DIR__.'/../model/User.php';

class ResetTokenService extends BaseService
{
    private ResetTokenRepository $repository;
    private UserRepository $userRepository;

    public function __construct()
    {
        $this->repository = new ResetTokenRepository();
        $this->userRepository = new UserRepository();
    }

    public function setNewPassword(string $token, string $password): bool
    {
        $data = $this->repository->verify_token($token);

        if (! $data) {
            return false;
        } else {
            $email = $data['Email'];
            $this->userRepository->set_new_password($email, $password);
            $this->repository->remove_token($email);
            return true;
        }
    }

    private function verifyUserExists(string $email): \Model\User|bool
    {
        return $this->userRepository->get_with_cred($email);
    }

    public function sendRecoveryEmail(string $email): void
    {

        $user = $this->verifyUserExists($email);

        if (! $user) {
            return; // exit
        }

        $curl = curl_init('https://api.resend.com/emails');
        $token = $this->repository->create_new_token($email);

        if (! $token) {
            return; // exit
        }

        $data = [
            'from' => 'Password Reset <no_reply@ishitmypants.zip>',
            'to' => $email,
            'subject' => 'Password reset - Haarlem Festival/Tourism',
            'html' => Route::template('login.reset_email', ['name' => $user->Name, 'token' => $token]),
        ];

        $payload = json_encode($data);

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLINFO_HEADER_OUT, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($curl, CURLOPT_HTTPHEADER, [
            'Authorization: Bearer '.getenv('RESEND_API'),
            'Content-Type: application/json',
        ]);

        $res = curl_exec($curl);
    }
}
