<?php

namespace App\Services\Tag;

use App\Repositories\InterfaceTagRepository;

class TagService extends BaseService implements InterfaceTagService{

    protected $repository;

    public function __construct(InterfaceTagRepository $repository)
    {
        $this->repository = $repository;
    }

}
