<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_event_notallowed extends Model
{
    //
    public $primaryKey=array('event_id','user_id');
}
