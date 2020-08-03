<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Baby_checkup extends Model
{
    public function baby(){
        return $this->belongsTo('App\Baby', 'baby_id');
    }

    public function baby_tooth(){
      return $this->hasOne('App\Baby_tooth');
    }
}