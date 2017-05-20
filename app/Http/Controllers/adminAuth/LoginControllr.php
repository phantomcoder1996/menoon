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
        else if($user->role ==='')

        return redirect()->intended('/home1');
    }


   
}
