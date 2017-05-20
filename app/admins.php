<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
//Trait for sending notifications in laravel
use Illuminate\Notifications\Notifiable;
class admins  extends Authenticatable

   
{
     use Notifiable;
    protected $guard='web_admins';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
   

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

     //Send password reset notification
  public function sendPasswordResetNotification($token)
  {
      $this->notify(new AdminResetPasswordNotification($token));
  }
}
