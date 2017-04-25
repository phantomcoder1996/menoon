<?php

namespace App\Http\Controllers\Auth;

use App\User;


use App\user_emails;
use App\guest_newsletter;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'fname' => 'required|max:255',
            'username' => 'required|max:255|unique:users',
            'email' => 'required|email|max:255|unique:user_emails,email',
            'password' => 'required|min:6|confirmed',
            'lname'=>'required|max:255',
            'address'=>'required|max:500',
            'membership'=>'required',
            
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
          $fileName = 'null';
      if(Input::hasFile('pic'))
    {  if (Input::file('pic')->isValid()) {
        $destinationPath = public_path('uploads/files');
        $extension = Input::file('pic')->getClientOriginalExtension();
        $fileName = uniqid().'.'.$extension;

        Input::file('pic')->move($destinationPath, $fileName);

        
      Input::file('pic')->store('avatars');
    }
}
          

        $user= User::create([
            'fname' => $data['fname'],
            'lname' => $data['lname'],
            'address' => $data['address'],
            'username' => $data['username'],         
            'membership' => $data['membership'],
            'pic'=>$fileName,
            'password' => bcrypt($data['password']),
        ]);
        $user->save();
      // $user->userEmail()->save(new userEmail(['email'=>$data['email']]));
        //    $flight = new user_emails;

        // $flight->email = $data['email'];
        //  $flight->user_id=$user->id;
        // $flight->save();
        // $useremail=user_emails::create(['email'=>$data['email'],'user_id'=>$user->id]);
         //$useremail->save();
       // // dd($useremail);
       //  $user->useremail()->save($useremail);
        $em=trim($data['email']);
        DB::table('user_emails')->insert(
    ['email' => $em, 'user_id'=>$user->id]
   

);
         //checking if the user has subscribed to newsletter before registering .If so, the users email is removed from guest newsletter
    //and mailing list flag is set to true;
    $email=guest_newsletter::where('email',$em)->first();
    if($email!=NULL)
    {
        DB::table('guest_newsletters')->where('email',$em)->delete();
        user_emails::where('email',$em)->update(['mailinglist_flag'=>true]);
    }



        return $user;
    }
}
