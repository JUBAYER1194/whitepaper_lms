<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ApiUserController extends Controller
{
    //
    public function index($id){
        $user=User::find($id);
        return new UserResource($user);

    }
    public function update(Request $request,$id){
//        \Log::info($request->all());

        $exploded=explode(',',$request->image);
        $decoded=base64_decode($exploded[1]);
        if (str_contains($exploded[0],'jpeg'))
            $extension='jpg';
        else
            $extension='png';
        $fileName=str_random().'.'.$extension;
        $path=public_path().'/uploads/x/profile/'.$fileName;
        file_put_contents($path,$decoded);

        $user=User::find($id);
        $user->first_name=$request->first_name;
        $user->last_name=$request->last_name;
        $user->father_name=$request->father_name;
        $user->mother_name=$request->mother_name;
        $user->class_teacher_name=$request->class_teacher_name;
        $user->phone=$request->phone;
        $user->parents_contact=$request->parents_contact;
        $user->email=$request->email;
        $user->nid=$request->nid;
        $user->image=$fileName;
        $user->address=$request->address;
        $user->role_id=$request->role_id;
        $user->update();
        //$id->update($request->except('image')+['image'=>$fileName]);

        return response('Update',Response::HTTP_ACCEPTED);

    }
}
