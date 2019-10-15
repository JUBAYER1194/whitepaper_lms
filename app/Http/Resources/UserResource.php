<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'first_name'=>$this->first_name,
            'last_name'=>$this->last_name,
            'father_name'=>$this->father_name,
            'mother_name'=>$this->mother_name,
            'class_teacher_name'=>$this->class_teacher_name,
            'phone'=>$this->phone,
            'parents_contact'=>$this->parents_contact,
            'email'=>$this->email,
            'nid'=>$this->nid,
            'image'=>$this->image,
            'address'=>$this->address,
            'Status'=>$this->status,
            'role'=>$this->getRoleNames()->first(),
        ];
    }
}
