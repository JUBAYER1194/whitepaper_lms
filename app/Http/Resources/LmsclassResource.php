<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LmsclassResource extends JsonResource
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
            'name'=>$this->name,
            'section'=>$this->section,
            'description'=>$this->description,
            'first_name'=>$this->user->first_name,
            'last_name'=>$this->user->last_name,
            'user_id'=>$this->user_id,
            'code'=>$this->code,
            'exam'=>LmsclassExamresource::collection($this->exam),
            'created_at'=>$this->created_at->diffForHumans(),

        ];
    }
}
