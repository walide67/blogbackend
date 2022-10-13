<?php

namespace App\Services;

use App\Repositories\Eloquent\BaseRepository;
use App\Repositories\EloquentRepositoryInterface;

class BaseService implements BaseInterfaceService{

    protected $repository;

    public function __construct(EloquentRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function get($columns = ['*'], $relationships = []){
        return $this->repository->get($columns, $relationships);
    }

    public function find($id){

        $item = $this->repository->find($id);

        if(!$item){
            return false;
        }

        return $item;
    }

    public function store($data){

        $stored = $this->repository->store($data);

        if(!$stored){
            return false;
        }
        return true;
    }

    public function update($id, $data){

        $exist = $this->repository->find($id);

        if(!$exist){
            return false;
        }

        $updated = $this->repository->update($id, $data);

        return true;

    }

    public function delete($id){
        $exist = $this->repository->find($id);

        if(!$exist){
            return false;
        }

        $delete = $this->repository->delete($id);

        return true;
    }
}
