<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use dateTime;
use App\User;
use App\user_emails;
use App\user_event_applications;
use App\events;
use App\event_attendance;
class adminController extends Controller
{

    public function viewEvents()
    {
        $Events[]=0;
        $Events=events::all();

        return view('pages.Admin.viewEvents', ['events' => $Events]);
    }

    public function viewApp(Request $request)
    {
        $id=DB::table('events')->select('id')->where('name','=',$request->eventName)->get();
        $users[]=0;
        $userName[]=0;
        $users=user_event_applications::where("event_id","=",$id[0]->id)->get();



    return view('pages.Admin.viewApp', ['users' => $users]);
    }

    public function viewApp2(Request $request)
    {
        $id=DB::table('events')->select('id')->where('name','=',$request->eventName)->get();
        $users[]=0;
        $userName[]=0;
        $users=user_event_applications::where("event_id","=",$id[0]->id)->get();

      return view('pages.Admin.setAttendence', ['users' => $users]);
    }
 public function setAttendence(Request $request, $id)
    {

        $users=user_event_applications::where("event_id","=",$id)->get();
        $ID=User::where('username','=',$request->username)->first();
        $dt = new DateTime();
       //    echo $dt->format('Y-m-d');
        DB::table('event_attendances')->insert(
            ['user_id' =>$ID->id , 'event_id' => $id,'day' => $dt->format('Y-m-d')]
        );

      //  echo($ID->id);
     return view('pages.Admin.setAttendence2',['id' =>$id,'users' => $users]);
    }




}

