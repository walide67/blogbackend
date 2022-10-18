<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['title', 'content', 'slug', 'language','main_media', 'categorie_id', 'extrait', 'rating', 'nbr_votes', 'status','deleted_at', 'created_at', 'updated_at'];

    public function media(){
        return $this->belongsTo(Media::class, 'main_media');
    }
}

