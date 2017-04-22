<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class certificates extends Model
{
    //
    public $primaryKey=array('user_id','event_id');
}
