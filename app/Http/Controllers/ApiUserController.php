<?php

namespace App\Http\Controllers;

use App\Http\Resources\studentResource;
use App\Http\Resources\SubjectResource;
use App\Http\Resources\teacherResource;
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

        $users = User::role('Student')->whereIn('status', [1, 2])->latest()->get();
        return studentResource::collection($users);
    }
    public function teacher_user(){

        $users = User::role('Teacher')->whereIn('status', [1, 2])->latest()->get();
        return teacherResource::collection($users);
    }
    public function assign_student(Request $request,$id){
        $user=User::find($id);
        $user->classHead()->sync($request->classHead);
        $user->lmsclass()->sync($request->subject);
        }
    public function assign_teacher(Request $request,$id){

        $user=User::find($id);
        $user->lmsclass()->detach();
        foreach ($request->subject as $subject){
            $user->lmsclass()->attach($subject['id']);

        }
        $user->classHead()->detach();
        foreach ($request->Selected_ClassHaed as $clasHeadId)
        {
            $user->classHead()->attach($clasHeadId['id']);

        }
        if($request->check ==1)
        {
            $user->lmsclass()->detach();
        }

    }

    public function authenticateUserClassSubject($id){
        $user=User::find($id);
        return SubjectResource::collection($user->lmsclass);
    }

    public function remove_student($user_id,$class_id){
        $user=User::find($user_id);
        $user->lmsclass()->detach($class_id);
    }


}
