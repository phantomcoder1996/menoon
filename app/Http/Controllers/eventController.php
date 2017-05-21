<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Storage;
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
public function payment(Request $request)
    {
        $path=0;
        if($request->hasFile('pic'))
        { $path = Storage::disk('public')->putFile('payment', $request->file('pic'));
            DB::table('membership_photocopies')
                ->insertGetId(
                    ['card_photocopy' =>  $path,'membership_id' =>Auth::user()->id]
                );
        }



      return view('pages.home');
    }

}
