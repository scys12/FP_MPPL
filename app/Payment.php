<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'user_ids','date_started', 'date_end', 'price', 'type', 'order_ids', 'teacher_ids', 'private_ids'
    ];

    protected $dates = ['date_started', 'date_end'];
    
    public function user()
    {
        return $this->hasOne('App\User');
    }

    public function transaction()
    {
        return $this->hasOne('App\Transaction');
    }
}
