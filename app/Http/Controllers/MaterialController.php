<?php

namespace App\Http\Controllers;

use App\Http\Resources\MaterialResource;
use App\Lmsclass;
use App\Material;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

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

        $base64_encoded_string =$request->file;
        $exploded=explode(',',$request->file);
        $decoded=base64_decode($exploded[1]);
        if (str_contains($exploded[0],'vnd.openxmlformats-officedocument.wordprocessingml.document')) {
            $extension = 'docx';
        }
        elseif (str_contains($exploded[0],'vnd.openxmlformats-officedocument.presentationml.presentation'))
        {
            $extension = 'pptx';
        }
        elseif (str_contains($exploded[0],'msword'))
        {
            $extension = 'doc';
        }
        elseif (str_contains($exploded[0],'pdf'))
        {
            $extension = 'pdf';
        }
        elseif (str_contains($exploded[0],'jpeg'))
        {
            $extension = 'jpeg';
        }
        elseif (str_contains($exploded[0],'png'))
        {
            $extension = 'png';
        }
        elseif (str_contains($exploded[0],'wav'))
        {
            $extension = 'wav';
        }
        elseif (str_contains($exploded[0],'mp3'))
        {
            $extension = 'mp3';
        }
        elseif (str_contains($exploded[0],'avi'))
        {
            $extension = 'avi';
        }
        elseif (str_contains($exploded[0],'octet-stream'))
        {
            $extension = 'flv';
        }
        elseif (str_contains($exploded[0],'x-matroska'))
        {
            $extension = 'mkv';
        }
        elseif (str_contains($exploded[0],'mp4'))
        {
            $extension = 'mp4';
        }
        elseif (str_contains($exploded[0],'mpeg'))
        {
            $extension = 'mpg';
        }
        else
            $extension='pdf';

        $fileName=str_random().'.'.$extension;
        $path=public_path().'/uploads/x/x/material/'.$fileName;
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
    public function update(Request $request,$id)
    {
          if($request->check==1){
           $exploded=explode(',',$request->material['file']);
            $decoded = base64_decode($exploded[1]);
            if (str_contains($exploded[0], 'docx'))
                $extension = 'docx';
            else
                $extension = 'pdf';
            $fileName = str_random() . '.' . $extension;
            $path = public_path() . '/uploads/x/x/material/' . $fileName;
            file_put_contents($path, $decoded);
            $editmaterial=Lmsclass::find($id)->material->find($request->material['id']);
            $editmaterial->option=$request->material['option'];
            $editmaterial->user_id=$request->material['user_id'];
            $editmaterial->lmsclass_id=$request->material['lmsclass_id'];
            $editmaterial->title=$request->material['title'];
            $editmaterial->body=$request->material['body'];
            $editmaterial->file=$fileName;
            $editmaterial->update();
            return response('Update',Response::HTTP_ACCEPTED);
        }
        else
        $editmaterial=Lmsclass::find($id)->material->find($request->material['id']);
        $editmaterial->option=$request->material['option'];
        $editmaterial->user_id=$request->material['user_id'];
        $editmaterial->lmsclass_id=$request->material['lmsclass_id'];
        $editmaterial->title=$request->material['title'];
        $editmaterial->body=$request->material['body'];
        $editmaterial->update();
        return response('Updates',Response::HTTP_ACCEPTED);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $material=Material::find($id);
        $material->delete();
        //

    }
    public function material($id){
        $material=Material::find($id);
        return new MaterialResource($material);
    }
}
