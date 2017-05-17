<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\question;
use Session;
class iqTest extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
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
        //
        $score=0;
        $correct_questions=0;
        $question_num=$request->get('question_num');
        for($i=0;$i<$question_num;$i++)
        {
            $qid=$request->get("qid$i");
            $submitted_ans=$request->get("q$qid");
            $submitted_ans=trim($submitted_ans);
           $points_ans= DB::table('iq_questions')->select('points','answer')->where('id',$qid)->get();



           $correct_ans=$points_ans[0]->answer;
           $points=$points_ans[0]->points;

           if($correct_ans==$submitted_ans) {
               $score += $points;
               $correct_questions += 1;
           }

        }
         $user_id=$request->user_id;
      //  DB::table('user_event_applications')->where('id',$id)->insert(['iq_test_score'=>$score],'application_dat');

        $eventid=$request->event_id;
        $event_min_iq_test_score=DB::table('events')->select('min_iq_test_score')->where('id',$eventid)->get();

$minimum_score=$event_min_iq_test_score[0]->min_iq_test_score;
        if($score>=$minimum_score)
        {
            DB::table('user_event_applications')->insert(['user_id'=>$user_id,'iq_test_score'=>$score,'event_id'=>$eventid,'application_date'=>date("Y-m-d")]);
        }
        Session::flash('score',array($score,$correct_questions,$question_num,$minimum_score));
        return redirect('/Events/View/'.$eventid);

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
        // $iq_questions=DB::table('event_iq_tests')->join('iq_questions','event_iq_tests.q_id','iq_questions.id')->where('event_id',$id)->join('question_choices','iq_questions.id','question_choices.q_id')
        // ->select('iq_questions.id','statement','q_choice_char','q_choice_content')->orderBy('iq_questions.id')->get()->toArray();

        // $json_questions=json_encode($iq_questions);
        //return view("pages.iqTest",['questions'=>$json_questions]);//withQuestions($iq_questions);

      //   return redirect()->back();

        $testquestions=array();
        $questions=DB::table('event_iq_tests')->join('iq_questions','event_iq_tests.q_id','iq_questions.id')->where('event_id',$id)->select('iq_questions.id','statement')->get()->toArray();
        for($i=0;$i<count($questions);$i++)
        {
            $q=new question;
            $q->setID($questions[$i]->id);
            $q->setStatement(($questions[$i]->statement));

            $answers=DB::table('question_choices')->select('q_choice_char','q_choice_content')->where('q_id',$questions[$i]->id)->get()->toArray();

            $q->addAnswers($answers);

            $testquestions[$i]=$q;

        }
       // echo $testquestions;
        return view("pages.iqTest",['questions'=>$testquestions,'eventid'=>$id]);//withQuestions($iq_questions);

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
        //will be used to update the score based on the received answers by comparing them to the original answer
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
