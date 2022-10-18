<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Http\Requests\StoreTagRequest;
use App\Http\Requests\UpdateTagRequest;
use App\Http\Resources\ArticleResource;
use App\Http\Resources\TagResource;
use App\Services\Tag\InterfaceTagService;

class TagController extends Controller
{

    protected $service;

    public function __construct(InterfaceTagService $service)
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
        $resource = TagResource::collection($this->service->get());

        return $this->success_message($resource);
    }

    public function get_articles_by_id($id){
        $data = $this->service->articles($id);

        return $this->success_message(ArticleResource::collection($data));
    }

    public function get_article_by_slug($slug){
        $data = $this->service->get_articles_by_slug($slug);

        return $this->success_message(new TagResource($data));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTagRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTagRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        $tag = $this->service->find($id);

        if(!$tag){
            return $this->error_message('Post not found', [], 404);
        }

        return $this->success_message(new TagResource($tag));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTagRequest  $request
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTagRequest $request, Tag $tag)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        //
    }
}
