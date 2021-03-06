<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
use App\guest_newsletter;
use App\user_emails;
use Session;
class newsletter_controller extends Controller
{
    //


    public function storemail(Request $request)
    {
         //$this->validate($request,["email"=>"required|email|unique:guest_newsletters"]);
        $rules=['email'=>'required|email|unique:guest_newsletters,email'];
        $messages=[
             'email.required'=>'The email is required.',
             'email.email'=>'This is not a valid email address.',
             'email.unique'=>'Email already exists.'

        ];
        $validator = Validator::make($request->all(),$rules,$messages);

        if ($validator->fails()) {
            return redirect('/')
                        ->withErrors($validator,'newsletter_subscription')
                        ->withInput();
        }

         $email=user_emails::where('email',$request->email)->first();
         if($email==NULL)

      {

         $subscription=new guest_newsletter;

         $subscription->email=$request->email;
       
         $subscription->save();

         Session::flash('success','Thanks for subscribing to our newsletter !');

     }
     else
     {
        $em=trim($request->email);
        $emailcheck=DB::table('user_emails')->where('email',$em)->value('mailinglist_flag');
        if($emailcheck==1)
        {
            Session::flash('success','You have subscribed using this email before !');
        }
        else
        {$email=user_emails::where('email',$em)->update(['mailinglist_flag'=>true]);
           Session::flash('success','Thanks for subscribing to our newsletter !');
}
       // $email->save();
     }
         //return view('pages/test',['success'=>'2']);

         return redirect('/');


         //still i have to check if the email belongs to an existing user so as to set the mailing list flag
         //to on
    }
}
