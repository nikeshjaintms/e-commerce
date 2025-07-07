<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
//use Illuminate\Foundation\Auth\User as Authenticatable;
use MongoDB\Laravel\Auth\User as Authenticatable;

use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     use Notifiable;

       protected $connection = 'mongodb';
    protected $collection = 'users';
    protected $fillable = [
        'name', 'email', 'password','role','photo','status','provider','provider_id',
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

     public function notifications()
    {
        return $this->morphMany(\App\Models\Notification::class, 'notifiable')->orderBy('created_at', 'desc');
    }

    public function orders(){
        return $this->hasMany('App\Models\Order');
    }

    public function unreadNotifications()
{
    return $this->morphMany(\App\Models\Notification::class, 'notifiable')
                ->whereNull('read_at')
                ->orderBy('created_at', 'desc');
}

}
