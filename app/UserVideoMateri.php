<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class UserVideoMateri extends Model
{
    protected $fillable = [
        'user_ids' , 'video_materi_ids',
    ];

    public function user()
    {
        return $this->hasOne('App\User');
    }
    public function video_materi()
    {
        return $this->belongsTo('App\VideoMateri', 'video_materi_ids');
    }
}
