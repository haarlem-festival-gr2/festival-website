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

        $content = $data['Content'];

        if ($content === null) {
            return '';
        } else {
            return $content;
        }
    }

    public function setPage(string $path, string $content): bool
    {
        try {
            $data = $this->repository->set_page($path, $content);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function getPageDataFromId(int $id): array|false
    {
        $data = $this->repository->get_page_id($id);

        if ($data === false) {
            return false;
        }

        return $data;
    }

    public function getPageFromId(int $id): string|false
    {
        $data = $this->repository->get_page_id($id);

        if ($data === false) {
            return false;
        }

        $content = $data['Content'];

        if ($content === null) {
            return '';
        } else {
            return $content;
        }

    }

    public function getAllPageData(): array
    {
        $data = $this->repository->get_all_pages();

        if ($data === false) {
            return false;
        }

        return $data;
    }
}
