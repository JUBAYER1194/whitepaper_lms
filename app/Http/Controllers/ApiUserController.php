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


        if($request->hasFile('image'))
        {
//            $profile_image=$request->image;
//            $profile_image_new_name=time().$profile_image->getClientOriginalName();
//            $profile_image->move('uploads/profile',$profile_image_new_name);
//            $abc=$id->update(['image'=>$profile_image_new_name]);
//            dd($abc);
        }
//        $id->update($request->all());
//
//        return response('Update',Response::HTTP_ACCEPTED);

    }
}
