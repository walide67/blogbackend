<?php

namespace App\Providers;

use App\Models\Article;
use App\Repositories\Eloquent\ArticleRepository;
use App\Repositories\Eloquent\BaseRepository;
use App\Repositories\Eloquent\CategorieRepository;
use App\Repositories\Eloquent\MediaRepository;
use App\Repositories\Eloquent\TagRepository;

use App\Repositories\EloquentRepositoryInterface;
use App\Repositories\InterfaceArticleRepository;
use App\Repositories\InterfaceCategorieRepository;
use App\Repositories\InterfaceMediaRepository;
use App\Repositories\InterfaceTagRepository;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(EloquentRepositoryInterface::class, BaseRepository::class);
        $this->app->bind(InterfaceArticleRepository::class, ArticleRepository::class);
        $this->app->bind(InterfaceCategorieRepository::class, CategorieRepository::class);
        $this->app->bind(InterfaceMediaRepository::class, MediaRepository::class);
        $this->app->bind(InterfaceTagRepository::class, TagRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
