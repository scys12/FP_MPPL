<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Freemalangga extends Model
{
    protected $fillable = [
        'name', 'description'
    ];
}
