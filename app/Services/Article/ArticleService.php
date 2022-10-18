<?php

namespace App\Services\Article;

use App\Repositories\InterfaceArticleRepository;
use App\Services\BaseService;

class ArticleService extends BaseService implements InterfaceArticleService{

    protected $repository;

    public function __construct(InterfaceArticleRepository $repository)
    {
        $this->repository = $repository;
    }

    public function trashed($id){
        $this->repository->softDelete($id);
    }

    public function search($keyword){
        return $this->repository->search($keyword);
    }

    public function get_by_slug($slug){
        return $this->repository->get_by_slug($slug);
    }

    public function get_recent_articles(){
        return $this->repository->get_recent_articles();
    }

    public function get_by_language($lang){
        return $this->repository->get_by_language($lang);
    }


}
