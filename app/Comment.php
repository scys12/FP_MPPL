<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'question_ids', 'comment', 'user_ids'
    ];

    public function question()
    {
        return $this->belongsTo('App\Question', 'question_ids');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_ids');
    }
}
