<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class event_rules extends Model
{
    public primaryKey=array('event_id','rule');
}
