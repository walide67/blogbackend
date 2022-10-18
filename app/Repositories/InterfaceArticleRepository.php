<?php

namespace App\Repositories;

interface InterfaceArticleRepository extends EloquentRepositoryInterface{

    public function softDelete($id);

    public function search($keyword);

    public function get_by_slug($slug);

    public function get_recent_articles();

    public function get_by_language($lang);

}
