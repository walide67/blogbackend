<?php

namespace App\Repositories\Eloquent;

use App\Models\Article;
use App\Repositories\InterfaceArticleRepository;
use App\Repositories\InterfaceCategorieRepository;

class ArticleRepository extends BaseRepository implements InterfaceArticleRepository{

    protected $model;

    public function __construct(Article $model){
        $this->model = $model;
    }

    public function softDelete($id){
        return $this->model->delete($id);
    }

    public function search($keyword){
        return $this->model ->where('title', 'LIKE', "%$keyword%")
                            ->orWhere('content', 'LIKE', "%$keyword%")
                            ->orWhere('extrait', 'LIKE', "%$keyword%")
                            ->get();
    }

    public function get_by_slug($slug){
        return $this->model->where('slug', $slug)->first();
    }

    public function get_recent_articles(){
        return $this->model->latest()->take(10)->get();;
    }

    public function get_by_language($lang){
        return $this->model->where('language', $lang)->get();
    }
}
