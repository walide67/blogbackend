<?php

namespace App\Services\Tag;

use App\Repositories\InterfaceTagRepository;
use App\Services\BaseService;


class TagService extends BaseService implements InterfaceTagService{

    protected $repository;

    public function __construct(InterfaceTagRepository $repository)
    {
        $this->repository = $repository;
    }

    public function articles($id){
        return $this->repository->get_articles($id);
    }

    public function get_articles_by_slug($slug){
        return $this->repository->get_articles_by_slug($slug);
    }

}
