<?php

namespace Service;

use Repository\DynPageRepository;

class DynPageService extends BaseService
{
    public DynPageRepository $repository;
    public function __construct() {
        $this->repository = new DynPageRepository();
    }

    public function getPage(string $path): string|false
    {
        $data = $this->repository->get_page($path);

        if ($data === false) {
            return false;
        }

        return $data['Content'];
    }
}
