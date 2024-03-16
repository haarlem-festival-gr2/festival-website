<?php

namespace Service;

use Repository\ResetTokenRepository;

require_once __DIR__.'/../repository/ResetTokenRepository.php';
require_once __DIR__.'/../service/BaseService.php';
require_once __DIR__.'/../model/User.php';

class ResetTokenService extends BaseService
{
    private ResetTokenRepository $repository;

    public function __construct()
    {
        $this->repository = new ResetTokenRepository();
    }

    public function setNewPassword(string $token, string $password): string|false
    {
        $data = $this->repository->verify_token($token);

        if (! $data) {
            return false;
        } else {
        }

    }
}
