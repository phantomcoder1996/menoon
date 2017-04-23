<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class event_attendance extends Model
{
    //

    public $primaryKey=array('event_id','user_id','day');
}
