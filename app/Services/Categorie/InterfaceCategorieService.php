<?php

namespace App\Services\Categorie;

use App\Services\BaseInterfaceService;

interface InterfaceCategorieService extends BaseInterfaceService{

    public function get_articles_by_slug($slug);

    public function get_articles($id);
}
