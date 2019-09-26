<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LmsclassExamresource extends JsonResource
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
            'teacher_id'=>$this->teacher_id,
            'class_id' =>$this->class_id,
            'type'=>$this->type,
             'status'=>$this->status,
            'question'=>QuestionResource::collection($this->Question),
        ];
    }
}
