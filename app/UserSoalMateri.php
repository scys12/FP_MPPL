<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class UserSoalMateri extends Model
{
    protected $fillable = [
        'user_ids' , 'soal_materi_ids',
    ];

    public function user()
    {
        return $this->hasOne('App\User');
    }
    public function soal_materi()
    {
        return $this->belongsTo('App\SoalMateri', 'soal_materi_ids');
    }
}
