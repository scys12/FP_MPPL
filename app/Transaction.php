<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'user_ids','date_started', 'date_end', 'price', 'type', 'status', 'teacher_ids', 'private_ids'
    ];

    protected $dates = ['date_started', 'date_end'];
    
    public function isPaid()
    {
        return $this->status == 'completed';
    }

    public function user()
    {
        return $this->hasOne('App\User');
    }

    public function payment()
    {
        return $this->belongsTo('App\Payment');
    }
}
