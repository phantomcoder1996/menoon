<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\media;
use App\events;
use Auth;
use Gate;
use App\Http\Requests;
use Illuminate\Session\Store;
use \Crypt;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use App\tagtable;
use App\User;
use App\Http\Requests\store_fb;
use Session;
class MediaController extends Controller
{
    //
   public function getmedia()
    {
 //        $medias = Events::all();
 //        $items = array();
 //        $event = '';
 //        foreach($medias as $media)
 //        {
 //            $event = Media::where('events_id',$media->id)->first();
 //            $items[] = array('Media' => $event);
          
 //        }
 //        dd($items);
 // return view('event',array( 'items' => $items ));

    	//$event=Events::all();
    	$event=events::find(1);
    	 // $items = Media::with('event')->get();
    	 // $e=$items->unique('events_id');
    	 // $e->values()->all();

    	$art = DB::table('media')
              ->join('events', 'events.id', '=', 'media.event_id')
               ->get();
               $e=$art->unique('id');
    	 $e->values()->all();

    //  $f = $event->medias()
    // ->with('event') // bring along details of the friend
    // ->join('media', 'events.id', '=', 'media.events_id')
    // ->get(); // exclude extra details from friends table
//dd($art);
            //dd($f);   
    	//return response(view('event',array('items'=>$e)),200, ['Content-Type' => 'application/json']);
    	return response()->json($e);
    	// return view('event',['items' => $e,'event'=>$event]  );
    	//$events = Media::where('events_id','=',$event->id)->with('medias')->first();
    	//dd($items);
    	//dd($events);
    }

public function getpic($id)
{
     // $sd = DB::table('media')->where('id', '=', $id);
      //$sd=Media::where('id', '=', $id);
	$sd=DB::table('media') ->join('events', 'events.id', '=', 'media.event_id')
  ->select('events.name as name','events.country as country','events.description as description','events.title as title','events.place as place','media.id as id','media.pic as pic','media.type as type')->where("media.event_id",$id)->get();
// dd($sd);
      //dd($sd);
    // return view('event', ['sd' => $sd])->render();
     // return view('event',['sd' => $sd])->with(array('sd' =>$sd));
      return response()->json($sd);
}



public function getgallery()
{



$Events=events::all();
 
  return view('pages.gallery',['events' => $Events,'flag'=>0]);
}

public function galleryview($id)
{ $sd=DB::table('media') ->join('events', 'events.id', '=', 'media.event_id')
  ->select('events.name as name','events.country as country','events.description as description','events.title as title','events.place as place','media.id as id','media.pic as pic','media.type as type')->where("media.event_id",$id)->get();
  return view('pages.galleryview',['events' => $sd,'flag'=>0]);
}


public function gettagged($id)
{  //alert(1);
  if (!Auth::guest())
  {$user = Auth::user();
  $u = DB::table('users')->where('username', Auth::user()->username)->first();
 
  $tag = DB::table('tagtables')->where('user_id', '=', $u->id)->where('media_id',$id)->get();
}
  if(count($tag)==0)
  { //dd(1);
    DB::table('tagtables')->insert(
    ['user_id' => $u->id, 'media_id' => $id]
);
    Session::flash('status','you have been queued , please wait for approval thanks');
    return redirect()->back()->with(['status'=>'you have been queued , please wait for approval thanks']);
  }
  Session::flash('status','Sorry it seems you have already tagged yourself please wait for approval thanks');
  return redirect()->back()->with(['status'=>'Sorry it seems you have already tagged yourself please wait for approval thanks']);
}

public function getmymedia()
{
 


  $user = Auth::user();
$u = DB::table('users')->where('username', Auth::user()->username)->first();
 $y = DB::table('events')
            ->join('media', 'media.event_id', '=', 'events.id')
            ->join('tagtables', 'tagtables.media_id', '=', 'media.id')
            ->select('events.name as name', 'events.country as country', 'media.pic as pic','tagtables.id as id','media.id as media_id','media.type as type')->where('tagtables.approved',1)->where('tagtables.user_id',$u->id)->get();






  
  $tags=DB::table('tagtables')->where('user_id',$u->id)->join('media', 'media.id', '=', 'tagtables.media_id')->select('media.pic as pic','tagtables.id as id','media.id as media_id','media.type as type')->where('tagtables.approved',0)->get();
  if(count($y)==0)
  {
    Session::flash('status','NO images for you to display');
    
  }
  return view('pages.mymedia',['events' => $y,'flag'=>0]);

}

}
