<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
// use Illuminate\Foundation\Auth\User as Authenticatable;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\PrivateClass;
use App\SoalMateri;
use App\VideoMateri;
use App\Transaction;
use App\Payment;
use App\UserPrivate;
use App\UserSoalMateri;
use App\UserVideoMateri;

class User extends Eloquent implements Authenticatable
{
    use AuthenticatableTrait, Notifiable;    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role', 'phone_number', 'username'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function hasRole($roleName)
    {
        switch ($roleName) {
            case 'admin':
                return $this->role === 'admin'; break;
            case 'user':
                return $this->role === 'user'; break;
            case 'teacher':
                return $this->role === 'teacher'; break;
            case 'superadmin':
                return $this->role === 'superadmin'; break;
            default: return false;
        }
    }

    public function class()
    {
        return $this->belongsToMany(PrivateClass::class);
    }

    public function question()
    {
        return $this->belongsToMany('App\Question');
    }

    public function comments()
    {
        return $this->belongsToMany('App\Comment');
    }

    public function soal_materis()
    {
        return $this->belongsToMany(SoalMateri::class);
    }

    public function video_materis()
    {
        return $this->belongsToMany(VideoMateri::class);
    }

    public function transactions()
    {
        return $this->belongsToMany(Transaction::class);
    }

    public function payments()
    {
        return $this->belongsToMany(Payment::class);
    }

    public function user_soal_materis()
    {
        return $this->belongsToMany(UserSoalMateri::class);
    }

    public function user_video_materis()
    {
        return $this->belongsToMany(UserVideoMateri::class);
    }

    public function user_private_class()
    {
        return $this->belongsToMany(UserPrivate::class);
    }
}
