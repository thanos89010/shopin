<?php

namespace App;

use App\Photo;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
    // protected $fillable = [
    //     'username', 'email', 'password',"first_name","last_name","photo_id"
    // ];

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


    public function image()
    {
        return $this->morphOne(Photo::class , 'imageable');
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }   


   
    
}
