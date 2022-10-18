<?php

namespace App\Repositories\Eloquent;

use App\Models\Media;
use App\Repositories\InterfaceCategorieRepository;
use App\Repositories\InterfaceMediaRepository;

class MediaRepository extends BaseRepository implements InterfaceMediaRepository{

    public function __construct(Media $model)
    {
        $this->model = $model;
    }

}
