<?php

namespace App;
namespace App\Baby_checkup;

use Illuminate\Database\Eloquent\Model;

class Baby extends Model
{
    public function baby_checkup(){
        return $this->hasmany('App\Baby_checkup');
    }
}
