<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\events;
class eventController extends Controller
{
    public function getEvents()
    {
      $Events=events::all();
      return view('pages.events', ['events' => $Events,'flag'=>0]);
    }
    public function getEvent($id)
    {
        $Event = events::where('id', $id)->first();
        return view('pages.Events.View.index', ['event' => $Event]);
    }
public function filterEvents(Request $request)
    {
        $Events[]=0;
        if($request->Date&&!($request->country))
            $Events=events::where('start_date','=',$request->Date)->get();
        else if (!($request->Date)&&$request->country)
            $Events=events::where('country','=',$request->country)->get();
        else if($request->Date&&$request->country)
            $Events=events::where('country','=',$request->country)->where('start_date','=',$request->Date)->get();
        else
            $Events=events::all();
        if (sizeof($Events)<=0)
        {
            $Events=events::all();
            return view('pages.events', ['events' => $Events,'flag'=>1]);
        }
      return view('pages.events', ['events' => $Events,'flag'=>0]);
    }

}
