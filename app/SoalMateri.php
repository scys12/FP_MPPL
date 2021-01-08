<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class SoalMateri extends Model
{
    protected $fillable = [
        'name', 'description', 'pertanyaan1', 'pertanyaan2', 'pertanyaan3', 'pertanyaan4',
        'pertanyaan5', 'pertanyaan6', 'pertanyaan7', 'pertanyaan8', 'pertanyaan9', 'pertanyaan10','user_ids',
        'jawaban1', 'jawaban2', 'jawaban3', 'jawaban4', 'jawaban5', 
        'jawaban6', 'jawaban7', 'jawaban8', 'jawaban9', 'jawaban10',
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_ids');
    }

    public function user_soal_materis()
    {
        return $this->hasMany('App\UserSoalMateri');
    }
}
