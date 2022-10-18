<?php

namespace App\Repositories\Eloquent;

use App\Models\Categorie;
use App\Repositories\InterfaceCategorieRepository;

class CategorieRepository extends BaseRepository implements InterfaceCategorieRepository{

    public function __construct(Categorie $model)
    {
        $this->model = $model;
    }

    public function get_articles($id){
        $category = $this->model->find($id);

        if(!$category){
            return false;
        }

        return $category->articles;
    }

    public function get_articles_by_slug($slug){
        $category = $this->model->where("slug", $slug)->with('articles')->first();

        if(!$category){
            return false;
        }

        return $category;
    }

}
