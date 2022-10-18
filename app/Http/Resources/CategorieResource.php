<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategorieResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'slug' => $this->slug,
            'description' => $this->description,
            'parent' => $this->parent ?: 0,
            'language'=> $this->language,
            'articles' => ArticleResource::collection($this->whenLoaded('articles')),
            'status' => $this->status === 1 ? true : false
        ];
    }
}
