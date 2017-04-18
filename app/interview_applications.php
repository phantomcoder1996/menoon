<?php

namespace menoon;

use Illuminate\Database\Eloquent\Model;

class interview_applications extends Model
{
    //
           
    public $primaryKey=array('user_id','event_id');
}
