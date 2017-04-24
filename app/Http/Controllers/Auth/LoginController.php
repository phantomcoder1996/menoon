<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Redirect;
use Session;
use Validator;
use Illuminate\Support\Facades\Input;
use Hash;
use Auth;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';
   /**  public function showLoginForm()
    {
        return view('auth.login');
    }*/

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

   public function username()
   {
    return 'username';
   }
    // public function postLogin(Request $request)
    //     {
    //         $this->validate($request, [
    //             'username' => 'required', 'password' => 'required',
    //         ]);
    
    //         $credentials = $request->only('username', 'password');
    
    //         if ($this->auth->attempt($credentials, $request->has('remember')))
    //         {
    //             return redirect()->intended($this->redirectPath());
    //         }
    
    //         return redirect($this->loginPath())
    //             ->withInput($request->only('username', 'remember'))
    //             ->withErrors([
    //                 'username' => $this->getFailedLoginMessage(),
    //             ]);
    //     }

   /** public function login(Request $request)
    {
       $rules=array('username'=>'required',
        'password'=>'reqiured');
       $validator =validator::make(Input::all(),$rules);
       if($validator->fails())
       {
        return Redirect::back()->withErrors($validator,'login')->withInput();
       }
    }**/
/**
    public function login(Request $request) {
        $rules = array (
                
                'username' => 'required',
                'password' => 'required' 
        );
        $validator = Validator::make ( Input::all (), $rules );
        if ($validator->fails ()) {
            return Redirect::back ()->withErrors ( $validator, 'login' )->withInput ();
        } else {
            if (Auth::attempt ( array (
                    
                    'username' => $request->get ( 'username' ),
                    'password' => $request->get ( 'password' ) 
            ) )) {
                session ( [ 
                        
                        'username' => $request->get ( 'username' ) 
                ] );
                return redirect()->back();
            } else {
                Session::flash ( 'message', "Invalid Credentials , Please try again." );
                return Redirect::back ();
            }
        }
    }

    public function logout() {
        Session::flush ();
        Auth::logout ();
        return Redirect::back ();
    }*/

}
