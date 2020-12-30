<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class UserPrivate extends Model
{
    protected $fillable = [
        'user_ids' , 'private_class_ids',
    ];

    public function user()
    {
        return $this->hasOne('App\User');
    }
    public function private_class()
    {
        return $this->belongsTo('App\PrivateClass', 'private_class_ids');
    }
}
