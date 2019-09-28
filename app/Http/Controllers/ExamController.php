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
    public function QuestionCreate(Request $request,$id){
        $class=Lmsclass::find($id);
        $class->exam()->createMany([
            [
                'teacher_id' =>$request->form['user_id'],
                'type' => $request->form['date'],
                'status' => 1,
            ],
        ]);
        if ($request->form['qcc'] == 1 ) {
            $exam = Exam::latest()->first();
            $exam->Question()->create([
                'type' => 'Creative',
            ]);
            foreach ($request->creatives as $creative) {
                $question = Question::latest()->first();
                $question->Qcreative()->create([

                    'story'=>$creative['story'],
                    'question_1'=>$creative['q1'],
                    'question_2'=>$creative['q2'],
                    'question_3'=>$creative['q3'],
                    'question_4'=>$creative['q4'],
                    'q1_marks'=>$creative['q1m'],
                    'q2_marks'=>$creative['q2m'],
                    'q3_marks'=>$creative['q3m'],
                    'q4_marks'=>$creative['q4m'],
                    'all_marks'=>$creative['q1m']+$creative['q2m']+$creative['q3m']+$creative['q4m']

                ]);

            }
        }
        if ($request->form['qcm'] == 1 ) {
            $exam = Exam::latest()->first();
            $exam->Question()->create([
                'type' => 'Multiple',
            ]);
            foreach ($request->multiples as $multiple) {
                $question = Question::latest()->first();
                $question->Qmultiple()->create([

                    'question'=>$multiple['qm'],
                    'option_1'=>$multiple['op1'],
                    'option_2'=>$multiple['op2'],
                    'option_3'=>$multiple['op3'],
                    'option_4'=>$multiple['op4'],
                    'marks'=>$multiple['qmm'],


                ]);

            }
        }
        if ($request->form['qcp'] == 1 ) {
            $exam = Exam::latest()->first();
            $exam->Question()->create([
                'type' => 'Pool',
            ]);
            foreach ($request->pools as $pool) {
                $question = Question::latest()->first();
                $question->Qpoll()->create([
                    'question'=>$pool['qp'],
                    'option_1'=>$pool['op1'],
                    'option_2'=>$pool['op2'],
                    'option_3'=>$pool['op3'],
                    'option_4'=>$pool['op4'],

                ]);

            }
        }
        if ($request->form['qcs'] == 1 ) {
            $exam = Exam::latest()->first();
            $exam->Question()->create([
                'type' => 'Short',
            ]);
            foreach ($request->shorts as $short) {
                $question = Question::latest()->first();
                $question->Qshort()->create([
                    'question'=>$short['qs'],
                    'marks'=>$short['qsm'],


                ]);

            }
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
