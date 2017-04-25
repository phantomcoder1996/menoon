<?php

namespace App\Http\Controllers\Auth;


use Auth;




use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use App\User;
use App\user_emails;


class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;
protected $table = 'user_emails';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

      public function sendResetLinkEmail(Request $request)
    {
          
        $this->validate($request, ['email' => 'required|email|exists:user_emails']);
      // alert('mmmm');
               $response = $this->broker()->sendResetLink(
            $request->only('email')
        );

        return $response == Password::RESET_LINK_SENT
                    ? $this->sendResetLinkResponse($response)
                    : $this->sendResetLinkFailedResponse($request, $response);
        


    }


public function broker()
    {
         return Password::broker('emails');
    }

    protected function rules()
{
    return [
        'token' => 'required', 'email' => 'required|email|exists:user_emails',
    ];
}
 


 //protected function validator(array $data)


}
