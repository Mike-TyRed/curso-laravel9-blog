<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    //Relacion * - 1
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    //relacion 1 - * polimorfica
    public function comments()
    {
        return $this->morphMany('App\Models\Comment', 'commentable');
    }
}
