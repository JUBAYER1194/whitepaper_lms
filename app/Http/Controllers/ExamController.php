<?php

namespace App\Http\Controllers;

use App\Exam;
use App\Http\Resources\QuestionResource;
use App\Lmsclass;
use App\Qcreative;
use App\Qpoll;
use App\Question;
use Illuminate\Http\Request;

class ExamController extends Controller
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


    }
    public function QcraetiveCreate(Request $request){
         dd($request);

    }
    public function QuestionCreate(Request $request){

        $exam=new Exam;
        $exam->type=$request->type;
        $exam->class_id=$request->class_id;
        $exam->teacher_id=$request->teacher_id;
        $exam->status=$request->status;
        $exam->save();
        $question=new Question;
        $question->type=$request->question_type;
        $exam->Question()->save($question);
        $creative=new Qcreative;
        foreach ($exam->Question->Qcreative() as $x) {
                 $x->createMany([
                [
                    $creative->story = 'some data',
                ],
                [
                    $creative->question_1 = 'again some question',
                ],
            ]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function show($exam)
    {
        dd($exam);
        $question=Exam::find($exam)->Question;
        return QuestionResource::collection($question);

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function edit(Exam $exam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Exam $exam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exam $exam)
    {
        //
    }
}
