<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Http\Requests\StoreCategorieRequest;
use App\Http\Requests\UpdateCategorieRequest;
use App\Http\Resources\ArticleResource;
use App\Http\Resources\CategorieResource;
use App\Services\Categorie\InterfaceCategorieService;
use App\Traits\ResponseTrait;

class CategorieController extends Controller
{
    protected $service;

    public function __construct(InterfaceCategorieService $service)
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
        $resource = CategorieResource::collection($this->service->get());
        
        return $this->success_message($resource);
    }

    public function get_articles($id){
        $data = $this->service->get_articles($id);

        return $this->success_message(ArticleResource::collection($data));
    }

    public function get_articles_by_slug($slug){
        $data = $this->service->get_articles_by_slug($slug);

        return $this->success_message(new CategorieResource($data));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategorieRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategorieRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = $this->service->find($id);

        if(!$category){
            return $this->error_message('Post not found', [], 404);
        }

        return $this->success_message(new CategorieResource($category));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function edit(Categorie $categorie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategorieRequest  $request
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategorieRequest $request, Categorie $categorie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categorie $categorie)
    {
        //
    }
}
