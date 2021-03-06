<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



use Auth;

use App\Feedback;
use App\User;

use App\Http\Requests\store_fb;
use Session;




class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $feedbacks=DB::table('Feedback')->join('users', 'users.id', '=', 'feedback.user_id')
        ->orderby("feedback.created_at","desc")->get();

        //$feedbacks=DB::table('Feedback')->select('content')->orderby("created_at","desc")->get();
           
        return response()->json($feedbacks);

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
        $this->validate($request,array('content'=>'required|max:5000'));


        //store valid items in database
        $feedback=new Feedback;
  

        $feedback->content=$request->get('content');
       // dd($request->user_id);
        $feedback->user_id=$request->user_id;

        $feedback->save();

          Session::flash('success','Your feedback was successfully submitted !');
       // return view('pages/test',['success'=>'1']);
        
        return redirect('/');


 //return View::make('pages.test')->withSuccess($success);

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
