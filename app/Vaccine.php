<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vaccine extends Model
{
    public function baby(){
        return $this->belongsTo('App\Baby');
    }
}
