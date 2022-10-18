<?php

namespace App\Services\Tag;
use App\Services\BaseInterfaceService;


interface InterfaceTagService extends BaseInterfaceService{

    public function articles($id);

    public function get_articles_by_slug($slug);
    
}
