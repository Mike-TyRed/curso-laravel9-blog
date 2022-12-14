<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //Relacion * - 1
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    //relacion 1 - *
    public function category(){
        return $this->belongsTo('App\Models\Category');
    }

    //relacion 1 - 1 polimorfica
    public function image()
    {
        return $this->morphOne('App\Models\Image', 'imageable');
    }

    //relacion 1 - * polimorfica
    public function comments()
    {
        return $this->morphMany('App\Models\Comment', 'commentable');
    }

    public function posts()
    {
        return $this->morphToMany('App\Models\Tag', 'taggable');
    }
}
