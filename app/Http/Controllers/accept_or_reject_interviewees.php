<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class accept_or_reject_interviewees extends Controller
{
    //
    public function index()
    {
        $users=DB::table('interview_applications')->join('Users','interview_applications.user_id','=','Users.id')
        ->join('events','interview_applications.event_id','=','events.id')
        -> select('user_id','event_id','interview_date_time','events.title','Users.username')->where('accepted',0)
        ->get();

        //echo $users;


return view('pages.Admin.acceptInterviewees',['users'=>$users]);
    }

    public function accept($userid,$eventid)
    {
         DB::table("interview_applications")->where('event_id',$eventid)->where('user_id',$userid)->update(['accepted'=>1]);
        return redirect('/acceptInterviewees');
    }

    public function reject(Request $request)
    {
        DB::table("interview_applications")->where('event_id',$request->get('eventid'))->where('user_id',$request->get('userid'))->delete();
        DB::table("user_event_notalloweds")->where('event_id',$request->get('eventid'))->where('user_id',$request->get('userid'))
            ->insert(['user_id'=>$request->get('userid'),'event_id'=>$request->get('eventid'),'reason'=>$request->get('reason')]);
        return redirect('/acceptInterviewees');
    }
}
