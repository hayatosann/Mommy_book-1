<?php

namespace App;
namespace App\Vaccine;

use Illuminate\Database\Eloquent\Model;

class Baby extends Model
{
    public function vaccine(){
        return $this->hasMany('App\vaccine');
    }
}
