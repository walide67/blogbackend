<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
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
            'id'    => $this->id,
            'title' => $this->title,
            'slug' => $this->slug,
            'content'=> $this->content,
            'main_media' => $this->media->url,
            'categorie_id' => $this->categorie_id,
            'extrait' => $this->extrait,
            'rating' => $this->rating,
            'nbr_votes' => $this->nbr_votes,
            'status' => $this->status,
            'deleted_at' => $this->deleted_at,
            'created_at' => Carbon::parse($this->created_at)->toFormattedDateString(),
            'updated_at' => $this->updated_at
        ];
    }
}
