<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\Http\Resources\ArticleResource;
use App\Services\Article\InterfaceArticleService;

class ArticleController extends Controller
{

    protected $service;

    public function __construct(InterfaceArticleService $service)
    {
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resource = ArticleResource::collection($this->service->get());

        return $this->success_message($resource);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreArticleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArticleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = $this->service->find($id);

        if(!$article){
            return $this->error_message('Post not found', [], 404);
        }

        return $this->success_message(new ArticleResource($article));
    }

    public function search($keyword){
        $data = $this->service->search($keyword);


        return $this->success_message(ArticleResource::collection($data));
    }

    public function get_by_slug($slug){
        $article = $this->service->get_by_slug($slug);

        if(!$article){
            return $this->error_message('Post not found', [], 404);
        }

        return $this->success_message(new ArticleResource($article));
    }

    public function get_recent_articles(){
        $articles = $this->service->get_recent_articles();

        return $this->success_message(ArticleResource::collection($articles));
    }

    public function get_by_languages($lang){
        
        $articles = $this->service->get_by_language($lang);

        return $this->success_message(ArticleResource::collection($articles));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateArticleRequest  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateArticleRequest $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }
}
