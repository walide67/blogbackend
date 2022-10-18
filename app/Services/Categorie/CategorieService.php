<?php

namespace App\Services\Categorie;

use App\Repositories\InterfaceCategorieRepository;
use App\Services\BaseService;

class CategorieService extends BaseService implements InterfaceCategorieService{

    protected $repository;


    public function __construct(InterfaceCategorieRepository $repository)
    {
        $this->repository = $repository;
    }

    public function get_articles_by_slug($slug){
        return $this->repository->get_articles_by_slug($slug);
    }

    public function get_articles($id){
        return $this->repository->get_articles($id);
    }

}
