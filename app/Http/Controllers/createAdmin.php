<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Validator;
class createAdmin extends Controller
{
    //
    public function store(Request $request)
    {
       
        //dd();
        $rules=['email'=>'required|email|unique:admins,email','password'=>'required|min:6|confirmed','countrycode'=>'numeric',
            'phonenumber'=>'required|numeric','role'=>'required',
            'exp_date'=>'required|date','fullname'=>'required','username'=>'required|unique:admins,username'];
        $messages=[
            'email.required'=>'The email is required.',
            'email.email'=>'This is not a valid email address.',
            'email.unique'=>'Email already exists.',
            'password.required'=>'The password is required',
            'password.min'=>'Password must be more than 6 characters',
            'countrycode.numeric'=>'Invalid country code',
            'phonenumber.required'=>'Phonenumber is required',
            'phonenumber.numeric'=>'Invalid phonenumber',
            'role.required'=>'Please choose a suitable role for the admin',
            'exp_date.required'=>'Expiration date is required',
            'exp_date.date'=>'Invalid date',
            'fullname.required'=>'Full name is required',
            'username.required'=>'Username is required',
            'username.unique'=>'Username already exists'



        ];
        $validator = Validator::make($request->all(),$rules,$messages);

        if ($validator->fails()) {
            return redirect('/createAdminView')
                ->withErrors($validator,'createAdmin')
                ->withInput();
        }
        $fullname=$request->get('fullname');
        $username=$request->get('username');
        $password=$request->get('password');
        $encrypted_password=bcrypt($password);
        $role=$request->get('role');
        $r=trim($role);
        $expirationdate=$request->get('exp_date');
        //$formatted_exp_date=date_format($expirationdate,"Y-m-d");
        $activation_date=date('Y-m-d');
         $email=$request->get('email');
         $countrycode=$request->get('countrycode');
         $phonenumber=$request->get('phonenumber');
         DB::table('admins')->insert(['fullname'=>$fullname,'username'=>$username,'password'=>$encrypted_password,'role'=>$role,
             'activation_date'=>$activation_date,'expiration_date'=>$expirationdate,'email'=>$email]);

         $id1=DB::table('admins')->select('id')->where('username',$username)->get();
$id=$id1[0]->id;
         DB::table('admin_phonenumbers')->insert(['admin_id'=>$id,'countrycode'=>$countrycode,'phonenumber'=>$phonenumber]);
         if($r=='event_creator'||$r=='event_attendance'||$r=='event_interviewer')
         {
             echo 'sdjk';
             $eventid=$request->get('cur_events');
             DB::table('event_admins')->insert(['event_id'=>$eventid,'admin_id'=>$id]);
         }

return redirect('/createAdminView');

    }

    public function getEventNames()
    {
          $names=DB::table('events')->select('name','id')->distinct()->get();

          return response()->json($names);
    }

}
