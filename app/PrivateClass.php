<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class PrivateClass extends Model
{
    protected $fillable = [
        'hari_kedua', 'hari_pertama', 'name', 'description', 'user_ids'
    ];

    public function user()
    {
        return $this->hasOne('App\User');
    }
}
