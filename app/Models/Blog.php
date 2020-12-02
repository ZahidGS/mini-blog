<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{

    //protected $guarded = ['id'];

    protected $fillable = [
        'name',
    ];


    //relacion 1:n - un blog tiene muchos posts
    public function posts(){
        return $this->hasMany(Post::class);
    }
}
