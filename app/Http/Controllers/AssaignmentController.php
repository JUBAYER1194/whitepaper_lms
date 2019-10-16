<?php

namespace App\Http\Controllers;

use App\Assaignment;
use App\Http\Resources\AssignmentResource;
use App\Lmsclass;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AssaignmentController extends Controller
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


//        $base64_encoded_string =$request->file;
        $exploded=explode(',',$request->file);
        $decoded=base64_decode($exploded[1]);
        if (str_contains($exploded[0],'docx'))
            $extension='docx';
        else
            $extension='pdf';
        $fileName=str_random().'.'.$extension;
        $path=public_path().'/uploads/x/x/assignment/'.$fileName;
        file_put_contents($path,$decoded);
        $assignment=new Assaignment();
        $assignment->user_id=$request->user_id;
        $assignment->lmsclass_id=$request->class_id;
        $assignment->title=$request->title;
        $assignment->deadline=$request->deadline;
        $assignment->body=$request->body;
        $assignment->file=$fileName;
        $assignment->save();
        return response('Created',Response::HTTP_ACCEPTED);
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
        $ann=Lmsclass::find($id)->Assaignments;
        return AssignmentResource::collection($ann);

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
//        $base64_encoded_string =$request->file;
        $exploded=explode(',',$request->file);
        $decoded=base64_decode($exploded[1]);
        if (str_contains($exploded[0],'docx'))
            $extension='docx';
        else
            $extension='pdf';
        $fileName=str_random().'.'.$extension;
        $path=public_path().'/uploads/x/x/assignment/'.$fileName;
        file_put_contents($path,$decoded);
        $assignment=Assaignment::find($request->id);
        $assignment->title=$request->title;
        $assignment->deadline=$request->deadline;
        $assignment->body=$request->body;
        $assignment->file=$fileName;
        $assignment->save();
        return response('Update',Response::HTTP_ACCEPTED);
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
        $assignment=Assaignment::find($id);
        $assignment->delete();
    }
}
