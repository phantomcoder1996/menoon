<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\User;
use App\user_emails;
use App\user_event_applications;
use App\events;
class adminController extends Controller
{

    public function viewEvents()
    {
        $Events[]=0;
        $Events=events::all();

        return view('pages.viewApp', ['events' => $Events]);
    }
    public function viewApp(Request $request)
    {
        $id=DB::table('events')->select('id')->where('name','=',$request->eventName)->get();
        $users[]=0;
       $users= DB::table('user_event_applications')->select('user_event_applications.user_id',
            'user_event_applications.application_date',
            'user_event_applications.event_id',
            'user_event_applications.iq_test_score',
            'user_event_applications.money_paid',
            'User.username')
            ->join('User','User.id','=','user_event_applications.user_id')->where(['user_event_applications.event_id' => $id])->get();

        return view('pages.events', ['users' => $users,'flag'=>0]);
    }

}
