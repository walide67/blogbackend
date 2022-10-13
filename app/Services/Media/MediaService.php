<?php

namespace App\Services\Media;

use App\Repositories\InterfaceMediaRepository;

class MediaService extends BaseService implements InterfaceMediaService{

    protected $repository;


    public function __construct(InterfaceMediaRepository $repository)
    {
        $this->repository = $repository;
    }

}
