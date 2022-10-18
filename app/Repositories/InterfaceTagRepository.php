<?php

namespace App\Repositories;

interface InterfaceTagRepository extends EloquentRepositoryInterface{

    public function get_articles($id);

    public function get_articles_by_slug($slug);

}
