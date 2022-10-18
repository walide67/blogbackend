<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug','status'];


    public function articles(){
        return $this->belongsToMany(Article::class, "articles_tags", "tag_id", "article_id");
    } 
}
