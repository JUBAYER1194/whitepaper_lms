<?php

namespace App\Http\Controllers;

use App\Http\Resources\MaterialResource;
use App\Lmsclass;
use App\Material;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //return Material::all();
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
        $exploded=explode(',',$request->file);
        $decoded=base64_decode($exploded[1]);
        if (str_contains($exploded[0],'docx'))
            $extension='docx';
        else
            $extension='pdf';
        $fileName=str_random().'.'.$extension;
        $path=public_path().'/uploads/profile/'.$fileName;
        file_put_contents($path,$decoded);

         Material::create($request->except('file')+['file'=>$fileName]);

        return response('Update',Response::HTTP_ACCEPTED);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function show($material)
    {
        //
        $class=Lmsclass::find($material)->material;

        return MaterialResource::collection($class);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function edit(Material $material)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Material $material)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function destroy(Material $material)
    {
        //
    }
}
