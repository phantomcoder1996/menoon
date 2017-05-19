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

        return view('pages.viewEvents', ['events' => $Events]);
    }
    public function viewApp(Request $request)
    {
        $id=DB::table('events')->select('id')->where('name','=',$request->eventName)->get();
        $users[]=0;
        $userName[]=0;
        /*$users= DB::table('user_event_applications')->select('user_event_applications.user_id',
            'user_event_applications.application_date',
            'user_event_applications.event_id',
            'user_event_applications.iq_test_score',
            'user_event_applications.money_paid',
            'User.username')
            ->join('User','User.id','=','user_event_applications.user_id')->where(['user_event_applications.event_id' => $id[0]->id])->get();
*/
       // echo ($id[0]->id);
        $users=user_event_applications::where("event_id","=",$id[0]->id)->get();


      for($i=0 ;$i<sizeof($users) ;$i++)
          $userName[$i]=DB::table('users')->select('username')->where('id','=',$users[$i]["user_id"])->get();

        // $userName[$i]=DB::table('users')->select('username')->where('id','=',$users->all()[$i]["user_id"])->get()->toArray();
      // $userName2= json_decode(json_encode($userName));
       // echo($userName2[0]);


       // echo ($users[0]);
      // echo($userName);

    return view('pages.viewApp', ['users' => $users,'userName'=>$userName]);
    }

}
