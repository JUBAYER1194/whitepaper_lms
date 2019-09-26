<?php

namespace App\Http\Controllers;

use App\Http\Resources\LmsclassResource;
use App\Http\Resources\LmsuserResource;
use App\Lmsclass;
use App\User;
use Illuminate\Http\Request;

class LmsclassController extends Controller
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
        //
        $class=new Lmsclass();
        $class->name=$request->name;
        $class->section=$request->section;
        $class->user_id=$request->user_id;
        $class->code=$request->code;
        $class->description=$request->description;
        $class->save();

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
        $class=User::find($id)->class;
        return $class;

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
    public function information(Lmsclass $name)
    {

        return new LmsclassResource($name);

    }
    public function user($id)

    {
        $users=Lmsclass::find($id)->users;
       return LmsuserResource::collection($users);

    }

}
