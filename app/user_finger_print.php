<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_finger_print extends Model
{
    //
    public $primaryKey=array('user_id','fingerprints');
}
