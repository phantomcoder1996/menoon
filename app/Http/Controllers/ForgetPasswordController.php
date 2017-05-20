<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\User;
use App\user_emails;
use App\guest_newsletter;
use Reminder;
use Mail;
use Illuminate\Auth\Reminders;

class ForgetPasswordController extends Controller
{
    //
    public function forgotpassword()
    {
         return view('auth.passwords.email');
    }
    public function postForgotPassword(Request $request)
    {
    	//return $request->email;
    		$user = DB::table('users')
              ->join('user_emails', 'users.id', '=', 'user_emails.user_id')->where('email',$request->email)
               ->get()->first();
              // $sentineluser=
              // return  $user;
    	//$email_user=user_emails::where('email',$request->email)->first();
             //  dd($user);
    	if(count($user)==0)
    	{    
           return redirect()->back()->with(['success'=>'your input doesnt match our credentials']);
    	}
    	$remider=Reminder::exists($user)?: Reminder:: create($user);
    	$this->sendEmail($user,'jjjj');
    	return redirect()->back()->with(['success'=>'Reset code was sent to your email']);
    }
    private function sendEmail($user,$code)
    {
    	Mail::send('auth.passwords.reset',['user'=>$user,'title'=>'Reset password'],function($message) use($user) 
    		{ $message->to($user->email);
    			$message->subject("Ressetting password");

    		});
    }
}
