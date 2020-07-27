<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Baby_checkup extends Model
{
    public function baby(){
        return $this->belongsTo('App\Baby', 'baby_id');
    }
}
