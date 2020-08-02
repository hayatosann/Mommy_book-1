<?php

namespace App;
// namespace App\Vaccine;
// namespace App\Baby_checkup;



use Illuminate\Database\Eloquent\Model;

class Baby extends Model
{

    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }
    protected $fillable =[
        'nickname', 'gender', 'birthdate'
    ];
    public function vaccine(){
        return $this->hasMany('App\Vaccine');
    }

    public function baby_checkup(){
        return $this->hasmany('App\Baby_checkup');
    }
}
