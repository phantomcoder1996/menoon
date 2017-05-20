<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\events;
use App\media;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use File;
class PhotoUploadController extends Controller
{
    //
   function getview ()

     {  $Events=events::all();
     	//dd($Events);
   	return view('mediaAdmin.home',['events' => $Events,'flag'=>0]);

     }


    public function getPhotosEvent($id)
    {
        $Event = events::where('id', $id)->first();
        $sd=DB::table('media')->where("event_id",$id)->get();
       // dd($sd);
        return view('mediaAdmin.insert', ['event' => $sd,'id'=>$id]);
    }

    public function deletePhotosEvent($id)
    { 

       $sd=DB::table('media')->select('pic')->where("id",$id)->get();
       DB::table('media')->where('id', '=', $id)->delete();
      File::delete($sd);
      return redirect()->back();
   }
    
  public function uploadPhotosEvent($id,Request $request)
   {    //  dd('dd');
            $fileName = 'null';
          if(Input::hasFile('pic'))
         // Input::file('pic')->store('avatars');
      { 
              if (Input::file('pic')->isValid()) {
              
        $destinationPath = public_path('/storage');
        $extension = Input::file('pic')->getClientOriginalExtension();
        $fileName = uniqid().'.'.$extension;
         Input::file('pic')->move($destinationPath, $fileName); 

         if($extension=='jpeg'||$extension=='png'||$extension=='bmp' ||$extension=='svg+xml'||$extension=='jpg') 
        //dd($fileName);
      {  DB::table('media')->insert(
         ['event_id' => $id, 'type' => 'img','pic'=>$fileName ]
             ); 
  }
  else 
  {
    DB::table('media')->insert(
         ['event_id' => $id, 'type' => 'vid','pic'=>$fileName ]
             );
  }
                 
     // dd('dd');
   
          }
      }

        return redirect()->back();
   }
}
