<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    public function baby(){
        return $this->belongsTo('App\Baby', 'baby_id');
    }
}
