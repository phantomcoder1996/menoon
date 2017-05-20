<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\events;
use App\media;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use File;
use App\tagtable;
use App\User;
use App\Http\Requests\store_fb;
use Session;
use app\event_attendances;
class ApproveTagsController extends Controller
{
    //
    public function getview()
    {
        // $myArray1 = array();
        // $myArray2 = array();


        //  $users = DB::table('tagtables')
        //     ->join('users', 'users.id', '=', 'tagtables.user_id')
        //     ->join('media', 'media.id', '=', 'tagtables.media_id')
        //     ->select('users.lname as lname', 'users.fname as fname', 'users.pic as avatar','media.pic as pic','tagtables.id as id','users.id as user_id','media.id as media_id','media.type as type')->where('tagtables.approved',0)->get();
        //     $myArray1[]=$users;
     
        // dd($myArray1);
    	 return view('tagerAdmin.home');
    }
    public function getviewappdis()
    {
      $myArray1 = array();
        $myArray2 = array();


         $users = DB::table('tagtables')
            ->join('users', 'users.id', '=', 'tagtables.user_id')
            ->join('media', 'media.id', '=', 'tagtables.media_id')
            ->select('users.lname as lname', 'users.fname as fname', 'users.pic as avatar','media.pic as pic','tagtables.id as id','users.id as user_id','media.id as media_id','media.type as type')->where('tagtables.approved',0)->get();
            $myArray1[]=$users;
     
        // dd($myArray1);
       return view('tagerAdmin.choosehome',['tags' => $users,'flag'=>0]);
    }
   public function approve($id)
   {//dd(1);
   	DB::table('tagtables')
            ->where('id', $id)
            ->update(['approved' => 1]);

            return redirect()->back();
   }

  public function disapprove($id)
  {
  	DB::table('tagtables')->where('id', $id)->delete();

  	return redirect()->back();
  }
  public function getviewremove()
  {
   $myArray1 = array();
   

      $users = DB::table('tagtables')
            ->join('users', 'users.id', '=', 'tagtables.user_id')            
            ->join('media', 'media.id', '=', 'tagtables.media_id')
            ->select('users.lname as lname', 'users.fname as fname', 'users.pic as avatar','media.pic as pic','tagtables.id as id','users.id as user_id','media.id as media_id','media.type as type','media.event_id as event_id')->where('tagtables.approved',1)->get()->groupBy('pic');
           
         // dd( $users);
            if(count($users)==0)
                {
                  Session::flash('status','NO Tags for you to display');
                  
                }
              return view('tagerAdmin.removetags',['tags' => $users,'flag'=>0]);
   
  }

  public function removetag($id)
  {
     DB::table('tagtables')->where('id', $id)->delete();

    return redirect()->back();
  }


 public function getevent()
 {
   $Events=events::all();
      //dd($Events);
    return view('tagerAdmin.chooseevent',['events' => $Events,'flag'=>0]);
 }

   public function geteventpic($id) 
   {
      $myArray1 = array();
        $myArray2 = array();


         $users = DB::table('event_attendances')
            ->join('users', 'users.id', '=', 'event_attendances.user_id')

            ->select('users.lname as lname', 'users.fname as fname', 'users.pic as avatar','users.id as user_id','event_attendances.id as id','event_attendances.event_id as event_id')->where('event_attendances.event_id',$id)->get();

            $media=DB::table('media')->where('media.event_id',$id)->get();
            $myArray1[]=$users;
            $myArray2[]=$media;
       
      
          // dd( $media);
            if(count($users)==0)
                {
                  Session::flash('status','NO Tags for you to display');
                   //dd($myArray1);
                }
              return view('tagerAdmin.tag',['utags' => $users,'image'=>$media,'flag'=>0]);
   }

   public function taguser($id,$id2)
   {//dd(1);
    $app =DB::table('tagtables')->where('media_id',$id2)->where('user_id',$id)->where('approved',1)->get();
    if(count($app)==0)
    {
       DB::table('tagtables')->insert([
    ['user_id' => $id, 'media_id' => $id2,'approved'=>1]]);
        Session::flash('status','user tagged');
    }
    else 
    {
      Session::flash('status','user already tagged');
    }
    return redirect()->back();
   }
}
