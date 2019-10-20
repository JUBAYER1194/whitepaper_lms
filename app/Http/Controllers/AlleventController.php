<?php

namespace App\Http\Controllers;

use App\AllEvent;
use App\Http\Resources\AlleventResource;
use Illuminate\Http\Request;

class AlleventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $event=AllEvent::all();
        return AlleventResource::collection($event);
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

        $event=new AllEvent();
        $event->name=$request->name;
        $event->details=$request->details;
         $event->start=$request->start;
        $event->end=$request->end;
        $event->color=$request->color;
        $event->save();

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

        $event=AllEvent::find($id);
        $event->name=$request->name;
        $event->details=$request->details;
        if ($request->start !='null null'){
            $event->start=$request->start;
        }
        if ($request->end !='null null'){
            $event->end=$request->end;

        }

        $event->color=$request->color;
        $event->update();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event=AllEvent::find($id);
        $event->delete();
    }
}
