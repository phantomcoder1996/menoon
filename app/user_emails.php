<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_emails extends Model
{
    //
   // public $primaryKey='email';
   public $primaryKey=array('user_id','email');

     protected $fillable = [
        'email','user_id'
    ];
    // public function user()
    // {
    //     return $this->hasOne('App\User');
    // }
}
