<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'user_ids','date_started', 'date_end', 'amount', 'item_ids'
    ];
}
