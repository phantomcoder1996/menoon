<?php

namespace menoon;

use Illuminate\Database\Eloquent\Model;

class admin_emails extends Model
{
    //
    public $primaryKey=array('admin_id','email');
}
