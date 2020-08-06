<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Baby extends Model
{

    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }
    protected $fillable =[
        'nickname', 'gender', 'birthdate'
    ];
    public function vaccines(){
        return $this->hasMany('App\Vaccine');
    }

    public function baby_checkups(){
        return $this->hasMany('App\Baby_checkup');
    }

    public function album(){
        return $this->hasMany ('App\album');
    }
}
