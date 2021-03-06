<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;
use App\User;

class PrivateClass extends Model
{
    protected $fillable = [
        'hari_kedua', 'hari_pertama', 'name', 'description', 'user_ids'
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_ids');
    }

    public function user_private()
    {
        return $this->hasMany('App\UserPrivate');
    }
}
