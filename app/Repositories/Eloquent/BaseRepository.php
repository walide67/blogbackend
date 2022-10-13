<?php

namespace App\Repositories\Eloquent;

use App\Repositories\EloquentRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class BaseRepository implements EloquentRepositoryInterface{

    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function get($columns = ['*'], $relationships = []){
        return $this->model->with($relationships)->get($columns);
    }

    public function find($id){

        return $this->model->find($id);
    }

    public function store($data){

        return $this->model->create($data);
    }

    public function update($id, $data){

        $model = $this->model->find($id);

         $this->model->update($data);

        return true;
    }

    public function delete($id){

        $this->model->forceDelete($id);

        return true;

    }
}
