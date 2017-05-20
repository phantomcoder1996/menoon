<?php

namespace App\Http\Controllers\adminAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;
use Auth;
use App\admins;
use Illuminate\Support\Facades\DB;

class LoginControllr extends Controller
{
    //

     use AuthenticatesUsers;
    

     protected $redirectTo = '/home1';

      protected function guard()
    {
      return Auth::guard('web_admins');
    }


    public function showLoginForm()
   { //dd( Hash::make('123'));
       return view('admin.auth.login');
   }

   public function username()
   {
    return 'username';
   }

public function authenticated(Request $request , $user)
    { if($user->role === 'tagger') {
            return redirect()->intended('/tags');
        }
        else if($user->role ==='media_uploader')
        {
          return redirect()->intended('/mediauploader');
        }
         else if($user->role ==='event_interviewer')
        {
          
        }
           else if($user->role ==='approval')
        {
          
        }
           else if($user->role ==='event_creator')
        {
          
        }
           else if($user->role ==='event_attendance')
        {
          
        }
         else if($user->role ==='data_entry')
        {
          
        }
        return redirect()->intended('/home1');
    }


   
}
