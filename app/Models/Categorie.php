<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'slug', 'parent', 'language', 'status'];

    public function articles(){
        return $this->hasMany(Article::class, "categorie_id");
    }
}
