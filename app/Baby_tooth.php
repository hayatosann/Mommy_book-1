<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Baby_tooth extends Model
{
    public function baby_checkup(){
        return $this->hasOne('App\Baby_checkup', 'baby_checkup_id');
    }
}
