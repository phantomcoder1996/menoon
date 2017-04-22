<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class media extends Model
{
    //


     public function event()
    {
        return $this->belongsTo('App\events');
    }
}
