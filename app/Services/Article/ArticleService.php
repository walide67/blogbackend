<?php

namespace App\Services\Article;

use App\Repositories\InterfaceArticleRepository;

class ArticleService extends BaseService implements InterfaceArticleService{

    protected $repository;

    public function __construct(InterfaceArticleRepository $repository)
    {
        $this->repository = $repository;
    }

    public function trashed($id){
        $this->repository->softDelete($id);
    }
}
