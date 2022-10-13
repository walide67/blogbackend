<?php

namespace App\Repositories\Eloquent;

use App\Models\Article;
use App\Repositories\Article\InterfaceArticleRepository;

class ArticleRepository extends BaseRepository implements InterfaceArticleRepository{

    protected $model;

    public function __construct(Article $model){
        $this->model = $model;
    }

    public function softDelete($id){
        $this->model->delete($id);
    }
}
