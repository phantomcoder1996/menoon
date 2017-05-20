<?php

namespace App\Http\Controllers\adminAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
class ResetPasswordController extends Controller
{
    //
     //trait for handling reset Password
	 protected $redirectTo ='/admins_login';
    use ResetsPasswords;

     public function showResetForm(Request $request, $token = null)
    {
        return view('admin.passwords.reset')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }

     //returns Password broker of seller
    public function broker()
    {
        return Password::broker('admins');
    }

    //returns authentication guard of seller
    protected function guard()
    {
        return Auth::guard('web_admins');
    }
}
