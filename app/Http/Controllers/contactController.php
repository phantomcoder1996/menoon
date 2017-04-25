<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Support\Facades\Mail;
use menoon\contact_requests;

class contactController extends Controller
{
    public function insertMessage(Request $request)
    {
        $this->validate($request,[
        'email'=>'required|email',
        'name' =>'min:3',
        'message' =>'min:10']);

       $message=new contact_requests();
       $message->name=$request->name;
       $message->email=$request->email;
       $message->content=$request->message;

       $message->save();
       return view('pages.Contact.index');

    }

}
