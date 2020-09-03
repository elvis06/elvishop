<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //protected $fillable=['nombre','slug','descripcion'];
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function images(){
        return $this->morphMany('App\Image','imageable');
    }
}
