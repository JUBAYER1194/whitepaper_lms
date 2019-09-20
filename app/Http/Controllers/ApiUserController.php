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
    public function update(Request $request,User $id){
//        \Log::info($request->all());
        $exploded=explode(',',$request->image);
        $decoded=base64_decode($exploded[1]);
        if (str_contains($exploded[0],'jpeg'))
            $extension='jpg';
        else
            $extension='png';
        $fileName=str_random().'.'.$extension;
        $path=public_path().'/uploads/profile/'.$fileName;
        file_put_contents($path,$decoded);



        $id->update($request->except('image')+['image'=>$fileName]);

        return response('Update',Response::HTTP_ACCEPTED);

    }
}
