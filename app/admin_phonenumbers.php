<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin_phonenumbers extends Model
{
    //
    public $primaryKey=array('admin_id','countrycode','phonenumber');
}
