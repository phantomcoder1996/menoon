<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_emails extends Model
{
    //
    public $primaryKey=array('user_id','email');
}
