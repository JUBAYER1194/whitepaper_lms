<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class QuestionResource extends JsonResource
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
            'exam_id'=>$this->exam_id,
            'type'=>$this->type,
            'creative'=>QcreativeResource::collection($this->Qcreative),
            'multiple'=>QmultipleResource::collection($this->Qmultiple),
            'poll'=>QpollResource::collection($this->Qpoll),
            'created_at' =>$this->created_at->diffForHumans(),
        ];
    }
}
