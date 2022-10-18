<?php

namespace App\Repositories;

interface InterfaceCategorieRepository extends EloquentRepositoryInterface{

    public function get_articles($id);

    public function get_articles_by_slug($slug);

}
