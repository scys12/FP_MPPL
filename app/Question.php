<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'user_ids', 'type', 'question', 'product_ids'
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_ids');
    }

    public function comments()
    {
        return $this->belongsToMany('App\Comment', 'product_ids');
    }
}
