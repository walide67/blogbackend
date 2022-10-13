<?php

namespace App\Services\Categorie;

use App\Repositories\InterfaceCategorieRepository;

class CategorieService extends BaseService implements InterfaceCategorieService{

    protected $repository;


    public function __construct(InterfaceCategorieRepository $repository)
    {
        $this->repository = $repository;
    }

}
