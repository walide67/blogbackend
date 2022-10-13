<?php

namespace App\Repositories;

interface EloquentRepositoryInterface{

    public function get($columns = ['*'], $relationships = []);

    public function find($id);

    public function store($data);

    public function update($id, $data);

    public function delete($id);

}
