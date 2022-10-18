<?php

namespace App\Services\Article;

use App\Services\BaseInterfaceService;

interface InterfaceArticleService extends BaseInterfaceService{

    public function trashed($id);

    public function search($keyword);

    public function get_by_slug($slug);

    public function get_recent_articles();

    public function get_by_language($lang);

}
