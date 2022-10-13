<?php

namespace App\Providers;

use App\Services\Article\ArticleService;
use App\Services\Article\InterfaceArticleService;
use App\Services\BaseInterfaceService;
use App\Services\BaseService;
use App\Services\Categorie\CategorieService;
use App\Services\Categorie\InterfaceCategorieService;
use App\Services\Media\InterfaceMediaService;
use App\Services\Media\MediaService;
use App\Services\Tag\InterfaceTagService;
use App\Services\Tag\TagService;
use Illuminate\Support\ServiceProvider;

class ServicesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(BaseInterfaceService::class, BaseService::class);
        $this->app->bind(InterfaceArticleService::class, ArticleService::class);
        $this->app->bind(InterfaceCategorieService::class, CategorieService::class);
        $this->app->bind(InterfaceMediaService::class, MediaService::class);
        $this->app->bind(InterfaceTagService::class, TagService::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        
    }
}
