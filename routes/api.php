<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\TagController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['prefix' => "languages"], function(){
    Route::get('/', [AppController::class, 'get_languages']);
});

Route::group(["prefix" => 'articles'], function(){
    Route::get('/', [ArticleController::class, 'index']);
    Route::get('/recent', [ArticleController::class, 'get_recent_articles']);
    Route::get('/show/{id}', [ArticleController::class, 'show']);
    Route::get('/{slug}', [ArticleController::class, 'get_by_slug']);
    Route::get('/search/{keyword}', [ArticleController::class, 'search']);
    Route::get('/languages/{lang}', [ArticleController::class, 'get_by_languages']);
});

Route::group(["prefix" => 'categories'], function(){
    Route::get('/', [CategorieController::class, 'index']);
    Route::get('/show/{id}', [CategorieController::class, 'show']);
    Route::get('/show/{id}/articles', [CategorieController::class, 'get_articles']);
    Route::get('/{slug}/articles', [CategorieController::class, 'get_articles_by_slug']);
});

Route::group(["prefix" => 'medias'], function(){
    Route::get('/', [MediaController::class, 'index']);
});

Route::group(["prefix" => 'tags'], function(){
    Route::get('/', [TagController::class, 'index']);
    Route::get('/show/{id}', [TagController::class, 'show']);
    Route::get('/show/{id}/articles', [TagController::class, 'get_articles_by_id']);
    Route::get('/{slug}/articles', [TagController::class, 'get_article_by_slug']);
});


