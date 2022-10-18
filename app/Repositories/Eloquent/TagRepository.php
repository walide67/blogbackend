<?php

namespace App\Repositories\Eloquent;

use App\Models\Tag;
use App\Repositories\InterfaceCategorieRepository;
use App\Repositories\InterfaceTagRepository;

class TagRepository extends BaseRepository implements InterfaceTagRepository{

    public function __construct(Tag $model)
    {
        $this->model = $model;
    }

    public function get_articles($id){
        $tag = $this->model->find($id);

        if(!$tag){
            return false;
        }

        return $tag->articles;

    }

    public function get_articles_by_slug($slug){
        $tag = $this->model->where("slug", $slug)->with('articles')->first();

        if(!$tag){
            return false;
        }

        return $tag;
    }

}
