<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class VideoMateri extends Model
{
    protected $fillable = [
        'user_ids','name', 'description', 'link'
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_ids');
    }

    public function user_video_materis()
    {
        return $this->hasMany('App\UserVideoMateri');
    }
}
