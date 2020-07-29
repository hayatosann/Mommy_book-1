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
    public function vaccine(){
        return $this->hasMany('App\Vaccine');
    }
}
