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
               $e=$art->unique('event_id');
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
	$sd=DB::table('media')->where("event_id",$id)->get();
// dd($sd);
      //dd($sd);
    // return view('event', ['sd' => $sd])->render();
     // return view('event',['sd' => $sd])->with(array('sd' =>$sd));
      return response()->json($sd);
}
}
