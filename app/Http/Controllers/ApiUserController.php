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
            if ($request->check ==1){
            $exploded=explode(',',$request->form['image']);
            $decoded=base64_decode($exploded[1]);
            if (str_contains($exploded[0],'jpeg'))
                $extension='jpg';
            else
                $extension='png';
            $fileName=str_random().'.'.$extension;
            $path=public_path().'/uploads/x/profile/'.$fileName;
            file_put_contents($path,$decoded);

            $user=User::find($id);
            $user->first_name=$request->form['first_name'];
            $user->last_name=$request->form['last_name'];
            $user->father_name=$request->form['father_name'];
            $user->mother_name=$request->form['mother_name'];
            $user->class_teacher_name=$request->form['class_teacher_name'];
            $user->phone=$request->form['phone'];
            $user->parents_contact=$request->form['parents_contact'];
            $user->email=$request->form['email'];
            $user->nid=$request->form['nid'];
            $user->image=$fileName;
            $user->address=$request->form['address'];
            $user->update();
            return response('Update',Response::HTTP_ACCEPTED);
           //$id->update($request->except('image')+['image'=>$fileName]);
        }
        else
        $user=User::find($id);
        $user->first_name=$request->form['first_name'];
        $user->last_name=$request->form['last_name'];
        $user->father_name=$request->form['father_name'];
        $user->mother_name=$request->form['mother_name'];
        $user->class_teacher_name=$request->form['class_teacher_name'];
        $user->phone=$request->form['phone'];
        $user->parents_contact=$request->form['parents_contact'];
        $user->email=$request->form['email'];
        $user->nid=$request->form['nid'];
        $user->address=$request->form['address'];
        $user->update();
        return response('Update',Response::HTTP_ACCEPTED);
        //$id->update($request->except('image')+['image'=>$fileName]);

    }
}
