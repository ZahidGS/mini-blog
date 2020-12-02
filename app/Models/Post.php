<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //protected $guarded = ['id']
    protected $fillable = [
        'title', 'content','blog_id'
    ];

    //boot provee una serie de eventos de manera automatica
    protected static function boot(){
        parent::boot();
        if (!app()->runningInConsole()) {
            self::creating(function ($table){
                $table->user_id = auth()->id();
            });
        }
    }
}
