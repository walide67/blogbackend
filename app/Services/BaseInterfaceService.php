<?php

namespace App\Services;

interface BaseInterfaceService{

    public function get();

    public function find($id);

    public function store($data);

    public function update($id, $data);

    public function delete($id);
}
