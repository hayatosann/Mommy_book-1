<?php

namespace App;
use App\Maternity_checkup;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    public function maternity_checkup(){
        return $this->hasMany ('App\Maternity_checkup');
    }


    public function album(){
        return $this->hasMany ('App\album');
    }
    use Notifiable;

    public function baby(){
        return $this->hasMany('App\Baby');
    }    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nickname', 'email', 'password', 'zipcode', 'birthdate', 'gender',
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
}
