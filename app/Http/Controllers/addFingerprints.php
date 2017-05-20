<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function MongoDB\BSON\toJSON;
use Storage;
use App\user_finger_print;
use Illuminate\Support\Facades\Log;
use Validator;

class addFingerprints extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get all users from the data base
     $users=DB::table('Users')->select('fname','lname','id','username')->get();

     return response()->json($users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //first validate image
       $rules=['fingerprint'=>'required|mimes:png,jpg,bmp,jpeg,gif'];
        $messages=[
             'fingerprint.required'=>'Please upload fingerprint.',
             'fingerprint.mimes'=>'Image type is not supported.'
           

        ];
        $validator = Validator::make($request->all(),$rules,$messages);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator,'fingerprints')
                        ->withInput();
        }
       
        $path = Storage::disk('public')->putFile('finger_print_uploads', $request->file('fingerprint'));
        


        $userid=$request->userid;


        DB::table('user_finger_prints')->insert(['user_id'=>$userid,'fingerprints'=>$path]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
