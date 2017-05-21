<?php

namespace App\Http\Controllers;

use App\certificates;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Support\Facades\Mail;
use App\User;
use App\user_emails;
use App\user_event_applications;
use App\events;
use Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class profileController extends Controller
{
    public function events()
    {
        $events = user_event_applications::where('user_id', '=',Auth::user()->id)->get();

        $userProfile = User::where('id', '=',Auth::user()->id)->get();


      // echo ($userProfile[0]->pic);
         return view('pages.updateInfo', ['events' => $events,'profile'=>$userProfile]);

    }
    public function profile(Request $request)
    {
        $events = user_event_applications::where('user_id', '=', $request->user_id)->get();
        $userProfile = User::where('id', '=',Auth::user()->id)->get();

        $user = User::where('id', '=', $request->user_id)->first();


            if (password_verify($request->password, $user->password)) {
                if ($request->firstName != "")
                    $user->fname = $request->firstName;
                if ($request->lastName != "")
                    $user->lname = $request->lastName;
                if ($request->address != "")
                    $user->address = $request->address;
                if ($request->userName != "")
                    $user->username = $request->userName;

                $user->save();

            }

        return view('pages.updateInfo', ['events' => $events,'profile'=>$userProfile]);
    }
    public function account(Request $request)
    {
        $events=user_event_applications::where('user_id','=',$request->user_id)->get();
        $userProfile = User::where('id', '=',Auth::user()->id)->get();
        $user=User::where('id','=',$request->user_id)->first();
        if($request->old==$request->confirm)
        {
            if (password_verify($request->old, $user->password)) {
                    $user->password = bcrypt($request->new);
                $user->save();


            }

        }
        return view('pages.updateInfo', ['events' => $events,'profile'=>$userProfile]);
    }

    public function account2(Request $request)
    {
        $events=user_event_applications::where('user_id','=',$request->user_id)->get();
        $userProfile = User::where('id', '=',Auth::user()->id)->get();
        $user=User::where('id','=',$request->user_id)->first();
        if(password_verify($request->confirm,$user->password))
        {
                $user->username=$request->userName;

            $user->save();

        }
        return view('pages.updateInfo', ['events' => $events,'profile'=>$userProfile]);
    }
    public function email(Request $request)
    {
        $events=user_event_applications::where('user_id','=',$request->user_id)->get();
        $userProfile = User::where('id', '=',Auth::user()->id)->get();
        $user=User::where('id','=',$request->user_id)->first();
        if(password_verify($request->password,$user->password))
        {
            if($request->primary!="")
            {

                DB::table('user_emails')
                    ->where('user_id', $request->user_id)
                    ->update(['email' => $request->primary,
                    'primary1'=>1,
                    'mailinglist_flag'=> 0]);

            }


            $user->save();


        }

        return view('pages.updateInfo', ['events' => $events,'profile'=>$userProfile]);
    }
    public function certificate(Request $request)
    {
        $userProfile = User::where('id', '=',Auth::user()->id)->get();
        $events=user_event_applications::where('user_id','=',$request->user_id)->get();
        $id=events::where('name','=',$request->eventName)->get();


      $eventID=certificates::where('event_id','=',$id[0]->id)->get();

     if(sizeof($eventID)==0)
        { DB::table('certificates')->insert(
            ['user_id' => $request->user_id, 'event_id' => $id[0]->id]
        );}
        return view('pages.updateInfo', ['events' => $events,'profile'=>$userProfile]);
    }



    public function profilePic(Request $request)
    {
        $userProfile = User::where('id', '=',Auth::user()->id)->get();
        $events = user_event_applications::where('user_id', '=', $request->user_id)->get();

        $path=0;
      if($request->hasFile('pic'))
        $path = Storage::disk('public')->putFile('profilePic', $request->file('pic'));
else
    echo("null");

        DB::table('users')->where('id', '=', $request->user_id)
            ->update(
                ['pic' =>  $path]
            );

        return view('pages.updateInfo', ['events' => $events,'profile'=>$userProfile]);

    }
}
