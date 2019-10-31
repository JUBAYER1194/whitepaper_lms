<?php

namespace App\Http\Controllers;

use App\Http\Resources\studentResource;
use App\Http\Resources\UserResource;
use App\lmsClass_user;
use App\User;
use App\User_classHead;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;

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
            $path=public_path().'/uploads/x/x/profile/'.$fileName;
            file_put_contents($path,$decoded);

            $user=User::find($id);
            $user->first_name=$request->form['first_name'];
            $user->last_name=$request->form['last_name'];
            $user->father_name=$request->form['father_name'];
            $user->mother_name=$request->form['mother_name'];
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
        $user->phone=$request->form['phone'];
        $user->parents_contact=$request->form['parents_contact'];
        $user->email=$request->form['email'];
        $user->nid=$request->form['nid'];
        $user->address=$request->form['address'];
        $user->update();
        return response('Update',Response::HTTP_ACCEPTED);
        //$id->update($request->except('image')+['image'=>$fileName]);

    }
    public function request_user(){
        $users=User::where('status','=',0)->get();
        return UserResource::collection($users);
    }
    public function accept_user($id){
             $user=User::find($id);
             $user->status=1;
             $user->update();
    }
    public function delete_user($id){
        $user=User::find($id);
        $user->delete();
    }
    public function student_user(){

        $users = User::role('Student')->whereIn('status', [1, 2])->get();
        return studentResource::collection($users);
    }
    public function assign_student(Request $request,$id){
        $user=User::find($id);
        $user->classHead()->sync($request->classHead);
        $user->lmsclass()->sync($request->subject);
        }


}
