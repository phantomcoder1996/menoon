<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Support\Facades\Mail;
use App\events;

class createEventController extends Controller
{
    public function createEvent(Request $request)
    {


        $event=new events();
        $event->name=$request->name;
        $event->start_date=$request->startDate;
        $event->end_date=$request->endDate;
        $event->country=$request->country;
        $event->description=$request->description;
        $event->title=$request->title;
        $event->place=$request->place;
        $event->certificate=$request->certificate;


        $event->save();
        return view('pages.eventAdmin');

    }

}
