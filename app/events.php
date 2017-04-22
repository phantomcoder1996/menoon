<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class events extends Model
{
    //

     public function medias()
    {
        return $this->hasMany('App\media');
    }
}
