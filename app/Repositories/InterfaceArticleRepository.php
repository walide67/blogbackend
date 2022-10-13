<?php

namespace App\Repositories;

interface InterfaceArticleRepository extends EloquentRepositoryInterface{

    public function softDelete($id);

}
